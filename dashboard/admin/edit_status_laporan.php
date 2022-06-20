<?php

  // Memanggil file koneksi.php untuk melakukan koneksi database
  require '../controller/koneksi.php';

  // Membuat variabel untuk menampung data dari FORMULIR PENGADUAN
  $id            = $_GET['id'];
  $status        = "dibaca";

  // Jalankan query UPDATE berdasarkan ID yang produknya kita edit
  $query  = "UPDATE laporan SET status = '$status' ";

  $query .= "WHERE id = '$id'";
  $result = mysqli_query($con, $query);

  // Periksa query apakah ada error
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($con));
  } else {
    // Akan redirect ke halaman index.php
    echo "<script>window.location='../admin/list_laporan.php';</script>";
  }

?>