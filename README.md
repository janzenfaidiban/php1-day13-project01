# php1-day13-project01
Learn MySQL in PHP


# Config
	
	Database Name : day13_project01

# CREATE DATABASE "day13_project01"

	CREATE DATABASE day13_project01

# CREATE TABLE "pengguna"

	CREATE TABLE pengguna(
		id INT(11) AUTO_INCREMENT PRIMARY KEY,
	    nama_depan VARCHAR(30) NULL,
	    nama_tengah VARCHAR(30) NULL,
	    nama_belakang VARCHAR(30) NULL,
	    tempat_lahir VARCHAR(30) NULL,
	    tanggal_lahir VARCHAR(2) NULL,
	    bulan_lahir VARCHAR(10) NULL,
	    tahun_lahir VARCHAR(4) NULL
	)

# CREATE CONNECTION

connection.php

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

		// PERIKSA KONEKSI
		if($connection->connect_error){
			echo "Koneksi Gagal!";
		} else {
			echo "Koneksi Berhasil!";
		}

	?>

