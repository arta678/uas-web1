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

	try {
		if(isset($_POST['submit-nasabah-update'])) {
		$id_nasabah = $_GET['id_nasabah'];
		$nama_nasabah = $_POST['nama_nasabah'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$hp_nasabah = $_POST['hp_nasabah'];
		$alamat_nasabah = $_POST['alamat_nasabah'];
		//update data to database	
		$sql = "UPDATE nasabah SET nama_nasabah = '$nama_nasabah', jenis_kelamin = '$jenis_kelamin', hp_nasabah = '$hp_nasabah', alamat_nasabah = '$alamat_nasabah' WHERE id_nasabah = '$id_nasabah'";
		$koneksi->exec($sql);
		echo "<script>
			setTimeout(function () {
				Swal.fire({
					type: 'success',
					title: 'Sukses Mengubah Data Nasabah!',
					toast: true,
  					showConfirmButton: true,
  					background:'#91F563'
				}).then(function() {
					window.location.href = 'data_nasabah.php';
				})
			});
		</script>";
	}
		
	} catch (Exception $e) {
		 echo $e->getMessage();
		
	}

	
?>