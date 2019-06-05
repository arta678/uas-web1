<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sweetalert2/css/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
</head>
<body>
	<script type="text/javascript" src="js/JQuery-3.3.1.min.js"></script>
	<script type="text/javascript" src="sweetalert2/js/sweetalert2.js"></script>
</body>
</html>
<?php 
include_once("koneksi.php");
	if(isset($_POST['submit'])) {
		$id_sampah = $_POST['id_sampah'];
		$nama_sampah = $_POST['nama_sampah'];
		$kategori_sampah = $_POST['kategori_sampah'];
		$harga_datang = $_POST['harga_datang'];
		$harga_jemput = $_POST['harga_jemput'];
		$harga_pengepul = $_POST['harga_pengepul'];
		$keterangan_sampah = $_POST['keterangan_sampah'];
		//insert data to database
		$sql = "INSERT INTO sampah VALUES (:id_sampah, :nama_sampah, :kategori_sampah, :harga_datang, :harga_jemput, :harga_pengepul,:keterangan_sampah)";
		$query = $koneksi->prepare($sql);
		$query->bindparam(':id_sampah', $id_sampah);
		$query->bindparam(':nama_sampah', $nama_sampah);
		$query->bindparam(':kategori_sampah', $kategori_sampah);
		$query->bindparam(':harga_datang', $harga_datang);
		$query->bindparam(':harga_jemput', $harga_jemput);
		$query->bindparam(':harga_pengepul', $harga_pengepul);
		$query->bindparam(':keterangan_sampah', $keterangan_sampah);
		
		$query->execute();
		echo "<script>
			setTimeout(function () {
				window.location.href = 'data_sampah.php';
				Swal.fire({
				    
					title: '<p>Berhasil Menambah Data Sampah</p>',
					showConfirmButton: true,
					toast:true,
				}).then(function() {
					window.location.href = 'data_sampah.php';
				})
			});
		</script>";
	}
	else {
		echo "<script>
			setTimeout(function () { 
				Swal.fire({
				    type: 'error',
					title: 'Data Galal Ditambahkan!'
				})
			});
		</script>";
	}
?>