<?php

// Koneksi ke Database
require '../controller/koneksi.php';

// Inisialisasi session
session_start();

$error = '';
$validate = '';

// Mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman Admin
if( isset($_SESSION['username']) ) {
    header('Location: admin.php');
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
            $query      = "SELECT * FROM users WHERE username = '$username'";
            $result     = mysqli_query($con, $query);
            $rows       = mysqli_num_rows($result);

            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
               
                    header('Location: admin.php');
                }
                            
            // Jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 

?>

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
    <section class="container-fluid mb-5 pt-5">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4 mt-5 p-5 card">
                <form class="form-container" action="login.php" method="POST">
                    <h4 class="text-center font-weight-bold m-3"> Selamat Datang </h4>
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
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                        
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Masuk</button>
                    <div class="form-footer mt-3 text-center">
                        <p> Belum punya Akun? <a href="register.php">Register</a></p>
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