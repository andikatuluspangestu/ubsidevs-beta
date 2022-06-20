<!-- PHP Logic -->
<?php

// Koneksi ke Database
require 'controller/koneksi.php';

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
        $level    = $_POST['level'];
       
        // Cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password))){
            if( cek_nama($name,$con) == 0 ){

                // Insert data ke database
                $query = "INSERT INTO users (level, username,name,email, password ) VALUES ('$level','$username','$name','$email','$password')";
                $result   = mysqli_query($con, $query);
                // Jika insert data berhasil maka akan diredirect ke halaman login 
                if ($result) {
                    header('Location: login.php');
                // Jika gagal maka akan menampilkan pesan error
                } else {
                    $error =  'Register Gagal';
                }

            } else{
                $error =  'Username sudah terdaftar';
            }
            
        } else {
            $error =  'Data tidak boleh kosong';
        }
    } 

    if(!isset($error)){
        $error = '';
    }

    // Membuat fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$con){
        
        // Cek username
        $username = mysqli_real_escape_string($con, $username);

        // Melakukan Fetch Query
        $query = "SELECT * FROM users WHERE username = '$username'";

        // Jika berhasil maka kembalikan nilai default
        if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
    }

    //jika level sudah diset maka masukkan datanya ke dalam variabel $cari
    if(isset($_GET['level'])){
        $cari = $_GET['level'];

        //ambil data dari database, dimana pencarian sesuai dengan variabel cari
        $data = mysqli_query($con, "select * from users where level = '$cari'");
		
    }else{

        //tapi jika jurusan belum diset, maka jangan tampilkan apapun
        $data = [];		
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
    <title>Register | UBSI Devs Community</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body id="login-register">
    <section class="container-fluid mb-4 mt-5">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4 card p-5">

                <!-- Formulir Pendaftaran -->
                <form class="form-container" action="register.php" method="POST">
                    <h4 class="text-center font-weight-bold mb-4"> Selamat Datang </h4>

                     <!-- Pesan Kegagalan atau Error -->
                    <?php if($error != ''){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error; ?>
                    </div>
                    <?php } ?>

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Alamat Email</label>
                        <input type="email" class="form-control" id="InputEmail" name="email"
                            aria-describeby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password"
                            placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Status Keanggotaan</label>
                        <select class="form-control" name="level">
                            <option value="">--Pilih Status--</option>
                            <option <?php if(!empty($cari)){ echo $cari == 'anggota' ? 'selected':''; } ?> value="anggota">Anggota</option>
                        </select>
                    </div>

                    <!-- Tombol Daftar -->
                    <button type="submit" name="submit" class="btn btn-sm btn-submit btn-primary btn-block">Daftar</button>
                    <div class="form-footer mt-2">
                        <p class="text-center"> Sudah punya account? <a href="login.php">Masuk</a></p>
                    </div>

                </form>
                <!-- Akhir Formulir -->
            </section>
        </section>
    </section>
</body>

</html>