<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Artikel</title>
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
      <h4 align="center" class="btn-info mb-5">Tulis Artikel</h4>
      <?php

        // Koneksi ke Database
        require '../controller/koneksi.php';

        // Buat fungsi untuk input Data
        function input($data)
        {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        if (isset($_POST["add_post"])) {
          
          $judul = input($_POST["judul"]);
          $gambar = @$_FILES['gambar']['name'];
          $tmp = @$_FILES['gambar']['tmp_name'];
          $gambarbaru = date ('dmYis').$gambar;
          $path = "../img/".$gambarbaru;
          $isi = input($_POST["isi"]);

      if(move_uploaded_file($tmp, $path)) {
          $sql = "insert into t_artikel (judul,gambar,isi) values ('$judul','$gambarbaru','$isi')";
          $hasil = mysqli_query($con, $sql);

            // Jika berhasil di submit maka akan di arahkan ke Halaman Utama
            if ($hasil ) {
              header("Location:../admin/admin.php");
            } else{
              echo "Pesan Error ". mysqli_error($con);
            }
        }
      }
        ?>
      <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="judulArtikel" class="form-label">Judul Artikel</label>
          <input class="form-control" type="text" name="judul" placeholder="Article Title" id="judulArtikel" />
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">Masukan Gambar Headline</label>
          <input class="form-control" name="gambar" type="file" id="formFile">
        </div>

        <div class="mb-3">
          <label for="formArtikel" class="form-label">Tulis Artikel</label>
          <textarea id="editor" name="isi" placeholder="Masukan artikel kamu disini"></textarea>
        </div>
        <button type="submit" name="add_post" class="btn btn-sm btn-success">Submit</button>
        <button type="reset" name="reset" class="btn btn-sm btn-danger">Reset</button>
        <a href="../admin.php"><button class="btn btn-sm btn-primary">Kembali</button></a>
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