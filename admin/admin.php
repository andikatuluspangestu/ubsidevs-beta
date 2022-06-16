<?php

  // Koneksi ke Database
  require '../controller/koneksi.php';

  // Inisialisasi session
  session_start();

  // Mengecek username pada session
  if( !isset($_SESSION['username']) ){
    $_SESSION['msg'] = 'Anda harus login untuk mengakses halaman ini';
    header('Location: login.php');
  } else {
    if(isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $query = mysqli_query($con, "DELETE FROM t_artikel WHERE id='$id'");
      header("Location: admin.php");
    }
  }

?>


<!DOCTYPE html>
<html>

<head>
  <title>Daftar Artikel</title>

 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

  <!-- Google Fonts Poppins CDN -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

</head>

<body class="bg-primary" style="font-family: 'Poppins', sans-serif;">

  <div class="container card mt-5 ps-5 pe-5 pb-5 mb-5">

    <!-- Judul Halaman -->
    <h2 class="text-center m-5 text-primary">Data Artikel</h2>

    <div class="row">
      <table class="table table-striped table-hover">

        <thead>

          <tr>

            <!-- Tombol Tambah Pengaduan -->
            <td><a class="btn btn-success mb-3 border-0" href="add.php"> <i class="bi bi-pencil-square"></i>
                Tulis</a>
            </td>

            <td></td>

            <!-- Kosongkan -->
            <td></td>
            <td></td>

            <!-- Tombol Keluar -->
            <td>
              <a class="btn btn-danger mb-3 border-0" href="../admin/logout.php"> <i class="bi bi-box-arrow-right"></i>
                Keluar</a>
            </td>
          </tr>

          <!-- Baris Judul Kolom Tabel -->
          <tr>
            <th>No</th>
            <th>Judul Artikel</th>
            <th></th>
            <th></th>
            <th>Action</th>
          </tr>

        </thead>
        <tbody>
          <?php

              // Jalankan Query untuk menampilkan semua data diurutkan berdasarkan ID
              $sql = "select id, judul from t_artikel order by id asc";
              $res = mysqli_query($con, $sql);

              // Buat perulangan untuk element tabel dari DATA LAPORAN
              $no = 1; //variabel untuk membuat nomor urut
      
              // Hasil query akan disimpan dalam variabel $data dalam bentuk array
              // Kemudian dicetak dengan perulangan while

              while ($data = mysqli_fetch_array($res)) {
              ?>
          <tr>

            <!-- Urutan Pengaduan -->
            <td>
              <?php echo $no; ?>
            </td>

            <!-- Judul Artikel -->
            <td>
              <?php echo $data['judul']; ?>
            </td>

            <td></td>
            <td></td>

            <!-- Tombol Aksi -->
            <td>
              <a class="btn btn-sm btn-danger" href="admin.php?delete=<?php echo $data['id']; ?>">
                <i class="bi bi-pencil-square"></i> Hapus
              </a>
              <a class="btn btn-sm btn-warning" href="haledit.php?id=<?php echo $data['id']; ?>">
                 <i class="bi bi-pencil-square"></i> Edit
              </a>
              <a class="btn btn-sm btn-secondary tex-light" href="../detail.php?id=<?= $data['id']; ?>">
                 <i class="bi bi-globe2"></i> Lihat
              </a> 
            </td>
          </tr>

          <?php
              // Agar Nomor Pengaduan terus bertambah 1
              $no++; 
            } ?>

        </tbody>
      </table>
    </div>
  </div>
</body>

</html>