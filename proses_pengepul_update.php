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
		if(isset($_POST['submit-pengepul-update'])) {
		$id_pengepul = $_GET['id_pengepul'];
		$nama_pengepul = $_POST['nama_pengepul'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$hp_pengepul = $_POST['hp_pengepul'];
		$alamat_pengepul = $_POST['alamat_pengepul'];
		//update data to database	
		$sql = "UPDATE pengepul SET nama_pengepul = '$nama_pengepul', jenis_kelamin = '$jenis_kelamin', hp_pengepul = '$hp_pengepul', alamat_pengepul = '$alamat_pengepul' WHERE id_pengepul = '$id_pengepul'";
		$koneksi->exec($sql);
		echo "<script>
			setTimeout(function () {
				Swal.fire({
					type: 'success',
					title: 'Sukses Mengubah Data Pengepul!',
					toast: true,
  					showConfirmButton: true,
  					background:'#91F563'
				}).then(function() {
					window.location.href = 'data_pengepul.php';
				})
			});
		</script>";
	}
		
	} catch (Exception $e) {
		 echo $e->getMessage();
		
	}

	
?>