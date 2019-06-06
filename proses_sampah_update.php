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
	if(isset($_POST['submit-sampah-update'])) {
		$id_sampah = $_GET['id_sampah'];
		$nama_sampah = $_POST['nama_sampah'];
		$kategori_sampah = $_POST['kategori_sampah'];
		$harga_datang = $_POST['harga_datang'];
		$harga_jemput = $_POST['harga_jemput'];
		$harga_pengepul = $_POST['harga_pengepul'];	
		$keterangan_sampah = $_POST['keterangan_sampah'];	
		//update data to database	
		$sql = "UPDATE sampah SET nama_sampah = '$nama_sampah', kategori_sampah = '$kategori_sampah', harga_datang = '$harga_datang', harga_jemput = '$harga_jemput', harga_pengepul = '$harga_pengepul', keterangan_sampah = '$keterangan_sampah' WHERE id_sampah = '$id_sampah'";
		$koneksi->exec($sql);
		echo "<script>
			setTimeout(function () {
				Swal.fire({
					type: 'success',
					title: 'Sukses Mengubah Data Sampah!',
					toast: true,
  					showConfirmButton: true,
  					background:'#91F563'
				}).then(function() {
					window.location.href = 'data_sampah.php';
				})
			});
		</script>";
	}
?>