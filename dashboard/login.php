<?php

// Koneksi ke Database
require 'controller/koneksi.php';

// Inisialisasi session
session_start();

$error = '';
$validate = '';

// Mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman Admin
if( isset($_SESSION['username']) ) {
    if ($_SESSION['level'] == 'admin') {
        header('Location: admin/index.php');
    } else if ($_SESSION['level'] == 'admin') {
        header('Location: anggota/index.php');
    }
}

//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
        
        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
       
        // Cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($username)) && !empty(trim($password))){

            // Fetch data berdasarkan username dari database
            $query      = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
            $result     = mysqli_query($con, $query);
            $rows       = mysqli_num_rows($result);

            if ($rows != 0) {
                $data   = mysqli_fetch_assoc($result);

                // cek jika user login sebagai admin
                if($data['level']=="admin"){
                	// buat session login dan username
                	$_SESSION['username'] = $username;
                	$_SESSION['level'] = "admin";
                	// alihkan ke halaman dashboard admin
                	header("location: ../dashboard/admin/index.php");
                
                // cek jika user login sebagai anggota
                }else if($data['level']=="anggota"){
                	// buat session login dan username
                	$_SESSION['username'] = $username;
                	$_SESSION['level'] = "anggota";
                	// alihkan ke halaman dashboard pegawai
                	header("location: ../dashboard/anggota/index.php");
                }
            } else {
                    $error =  'Username / Kata Sandi yang anda masukan salah';
                }
        } else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="https://ubsidevs.github.io/images/favicon.ico" />
    <title>Login | UBSI Devs Community</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body id="login-register">
    <section class="container-fluid mb-5 pt-5">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4 mt-5 p-5 card">
                <form class="form-container" action="login.php" method="POST">
                    <h4 class="text-center font-weight-bold m-3"> Selamat Datang </h4>

                    <!-- Alert jika terjadi eror -->
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                    </div>
                        
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-submit">Masuk</button>
                    <div class="form-footer mt-3 text-center">
                        <p> Belum punya Akun? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </section>
        </section>
    </section>

</body>
</html>