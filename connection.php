<?php 
	
	// MEMBUAT VARIABEL
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "day13_project01";

	// MEMBUAT KONEKSI
	$connection = new mysqli(
		$hostname,
		$username,
		$password,
		$database
	);

	// // PERIKSA KONEKSI
	// if($connection->connect_error){
	// 	echo "Koneksi Gagal!";
	// } else {
	// 	echo "Koneksi Berhasil!";
	// }

?>