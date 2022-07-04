<?php 
	
	// INTEGRASI FUNGSI KONEKSI
	require_once('connection.php');

	// PROSES MEMBUAT VARIABEL DATA YANG DIKIRIMKAN DARI FORM
	if(isset($_GET['submit'])){
		$nama_depan = $_GET['nama_depan'];
		$nama_tengah = $_GET['nama_tengah'];
		$nama_belakang = $_GET['nama_belakang'];
		$tempat_lahir = $_GET['tempat_lahir'];
		$tanggal_lahir = $_GET['tanggal_lahir'];
		$bulan_lahir = $_GET['bulan_lahir'];
		$tahun_lahir = $_GET['tahun_lahir'];

		// PROSES MEMBUAT QUERY
		$sql = "INSERT INTO pengguna (
			nama_depan, 
			nama_tengah, 
			nama_belakang, 
			tempat_lahir, 
			tanggal_lahir, 
			bulan_lahir, 
			tahun_lahir)
		VALUES (
			'$nama_depan', 
			'$nama_tengah', 
			'$nama_belakang',
			'$tempat_lahir',
			'$tanggal_lahir',
			'$bulan_lahir',
			'$tahun_lahir')";

		// PROSES MENAMBAH DATA KE DATABASE
		$result = $connection->query($sql);

		if($result == TRUE) {
			$pesan_berhasil = "<span class='alert alert-success'><b>Sukses!</b>Data berhasil ditambahkan</span>";
		} else {
			$pesan_gagal = "<span class='alert alert-danger'><b>Gagal!</b>Data gagal ditambahkan</span>";
		}

		// PROSES UNTUK BERHENTIKAN KONEKSI
		$connection->close();
	

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Native PHP CRUD</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

	<div class="container">

		<div class="row my-5">

			<!-- SIDEBAR -->
			<div class="col-lg-4 p-0 px-lg-4">

				<div class="list-group">
					<a href="index.php" class="list-group-item list-group-item-action">Dasbor</a>
					<a href="pengguna.php" class="list-group-item list-group-item-action">Pengguna</a>
					<a href="pengaturan.php" class="list-group-item list-group-item-action">Pengaturan</a>
				</div>

			</div>
			<!-- END SIDEBAR -->

			<!-- CONTENT -->
			<div class="col-lg-8 bg-light rounded border shadow">

				<h1 class="mb-4">Pengguna > Tambah</h1>

				<?php 
					if(isset($pesan_berhasil)) {

						echo $pesan_berhasil;

					} elseif(isset($pesan_gagal)){

						echo $pesan_gagal;

					}
					
				?>

				<hr class="my-4">

				<div class="row">

					<div class="col-lg-6">

						<!-- form -->
						<form class="mb-5" action="?">
							
							<div class="form-group mb-3">
								<input type="text" name="nama_depan" placeholder="Nama Depan" class="form-control">
							</div>

							<div class="form-group mb-3">
								<input type="text" name="nama_tengah" placeholder="Nama Tengah" class="form-control">
							</div>

							<div class="form-group mb-3">
								<input type="text" name="nama_belakang" placeholder="Nama Belakang" class="form-control">
							</div>

							<div class="form-group mb-3">
								<input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
							</div>

							<div class="form-group mb-3">
								<input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control">
							</div>

							<div class="form-group mb-3">
								<input type="text" name="bulan_lahir" placeholder="Bulan Lahir" class="form-control">
							</div>

							<div class="form-group mb-3">
								<input type="text" name="tahun_lahir" placeholder="Tahun Lahir" class="form-control">
							</div>

							<input type="submit" name="submit" value="Tambah" class="btn btn-sm btn-primary">

							<input type="submit" value="Reset" class="btn btn-sm btn-primary bg-light text-primary">

						</form>
						<!-- end form -->
						
					</div>
					
				</div>


				

			</div>
			<!-- END CONTENT -->
			
		</div>
		
	</div>

</body>
</html>