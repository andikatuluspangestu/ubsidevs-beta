<?php

  // Memanggil file koneksi.php untuk melakukan koneksi database
  require '../controller/koneksi.php';

  // Membuat variabel untuk menampung data dari FORMULIR PENGADUAN
  $id            = $_POST['id'];
  $judul         = $_POST['judul'];
  $isi           = $_POST['isi'];

  // Jalankan query UPDATE berdasarkan ID yang produknya kita edit
  $query  = "UPDATE t_artikel SET judul = '$judul', isi = '$isi' ";

  $query .= "WHERE id = '$id'";
  $result = mysqli_query($con, $query);

  // Periksa query apakah ada error
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($con));
  } else {
    // Akan redirect ke halaman index.php
    echo "<script>window.location='../anggota/index.php';</script>";
  }

?>