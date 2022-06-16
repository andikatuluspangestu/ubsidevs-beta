<?php 

// Koneksi
require '../controller/koneksi.php'; 
    
// Memulai Session
  session_start();

  if(isset($_SESSION['username'])){
      $username = $_SESSION['username'];
  } else{
      header("location:login.php");
  }

// Mengecek apakah di url ada nilai GET ID
  if (isset($_GET['id'])) {

    // Ambil nilai ID dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // Menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM t_artikel WHERE id='$id'";
    $result = mysqli_query($con, $query);

    // Mengambil data dari database
    $data = mysqli_fetch_assoc($result);
  }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Artikel</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
  <div class="container">
    <div class="card m-5 p-4" style="padding: 10px">
      <h4 align="center" class="btn-info mb-5">Edit Artikel</h4>
      <form action="edit.php" method="post" enctype="multipart/form-data">


        <!-- Menampung ID Data yang akan diedit -->
        <input class="form-control" name="id" value="<?php echo $data['id']; ?>"  hidden />

        <!-- Menampung Judul Artikel yang akan diedit -->
        <div class="mb-3">
          <label for="judulArtikel" class="form-label">Judul Artikel</label>
          <input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>" id="judulArtikel" />
        </div>

        <!-- Menampung Data artikel yang akan diedit -->
        <div class="mb-3">
          <label for="formArtikel" class="form-label">Tulis Artikel</label>
          <textarea id="editor" name="isi" value="<?php echo $data['isi']; ?>"></textarea>
        </div>

        <!-- Tombol Aksi -->
        <button type="submit" name="add_post" class="btn btn-sm btn-success">Submit</button>
        <button type="reset" name="reset" class="btn btn-sm btn-danger">Reset</button>
        <a href="admin.php"><button class="btn btn-sm btn-primary">Kembali</button></a>
      </form>
    </div>
  </div>

  <!-- Javascript untuk CKEditor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .then( editor => {
              console.log( editor );
      } )
      .catch( error => {
              console.error( error );
      } );
  </script>
</body>
</html>