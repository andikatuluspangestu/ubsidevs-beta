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
} else (!isset($_SESSION['username'])) {
    header('Location: login.php')
}

?>