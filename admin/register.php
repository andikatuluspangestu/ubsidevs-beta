<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(270deg, #6112ff, #9972e8);
        background-size: 400% 400%;
        -webkit-animation: AnimationName 0s ease infinite;
        -moz-animation: AnimationName 0s ease infinite;
        animation: AnimationName 0s ease infinite;
    }

    @-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
    }
    @-moz-keyframes AnimationName {
        0%{background-position:0% 50%}
        50%{background-position:100% 50%}
        100%{background-position:0% 50%}
    }
    @keyframes AnimationName {
        0%{background-position:0% 50%}
        50%{background-position:100% 50%}
        100%{background-position:0% 50%}
    }
</style>

</head>
<body>

<?php
// Koneksi ke Database
require '../controller/koneksi.php';

// Inisialisasi Session
session_start();

$error = '';
$validate = '';
if( isset($_SESSION['user']) ) header('Location: admin.php');

// Cek apakah Data username yang diinpukan user kosong atau tidak
if( isset($_POST['submit']) ){
        
        // Menghilangkan Backshlases demi keamanan
        $username = stripslashes($_POST['username']);

        // Keamanan dari serangan sql injection
        $username = mysqli_real_escape_string($con, $username);
        $name     = stripslashes($_POST['name']);
        $name     = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
       
        // Cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password))){

            // Mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if( cek_nama($name,$con) == 0 ){

                    // Hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);

                    // Insert data ke database
                    $query = "INSERT INTO users (username,name,email, password ) VALUES ('$username','$nama','$email','$pass')";
                    $result   = mysqli_query($con, $query);

                    // Jika insert data berhasil maka akan diredirect ke halaman admin 
                    // serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                       
                        header('Location: admin.php');
                    
                    // Jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                } else{
                        $error =  'Username sudah terdaftar !!';
                }
            
        } else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 

    // Membuat fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$con){
        // Cek username
        $nama = mysqli_real_escape_string($con, $username);

        // Melakukan Fetch Query
        $query = "SELECT * FROM users WHERE username = '$nama'";

        // Jika berhasil maka kembalikan nilai default
        if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
    }
?>
        <section class="container-fluid mb-4 mt-5">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4 card p-5">
                <form class="form-container" action="register.php" method="POST">
                    <h4 class="text-center font-weight-bold mb-4"> Selamat Datang </h4>

                    <!-- Pesan Kegagalan atau Error -->
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                   
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Alamat Email</label>
                        <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    <div class="form-footer mt-2">
                        <p class="text-center"> Sudah punya account? <a href="login.php">Masuk</a></p>
                    </div>
                </form>
            </section>
            </section>
        </section>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>