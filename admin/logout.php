<?php
    // Inisialisasi session
    session_start(); 

    // Hapus Session
    if(session_destroy()) {

        // Jika berhasil maka akan diredirect ke file index.php
        header("Location: ../index.php"); 
        
    }
?>