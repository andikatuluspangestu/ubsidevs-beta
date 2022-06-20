<?php 
	$con = mysqli_connect("localhost", "root", "", "db_community");

	if(!$con) {
		die("Koneksi Gagal : ". mysqli_connect_error());
	};
?>