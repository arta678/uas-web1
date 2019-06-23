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

// PROSES TAMBAH DATA NASABAH
try{
	if(isset($_POST['submit-pengepul-tambah'])) {
		$id_pengepul = $_POST['id_pengepul'];
		$nama_pengepul = $_POST['nama_pengepul'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$hp_pengepul = $_POST['hp_pengepul'];
		$alamat_pengepul = $_POST['alamat_pengepul'];
		//insert data to database
		$sql = "INSERT INTO pengepul VALUES (:id_pengepul, :nama_pengepul, :jenis_kelamin, :hp_pengepul, :alamat_pengepul )";
		$query = $koneksi->prepare($sql);
		$query->bindparam(':id_pengepul', $id_nasabah);
		$query->bindparam(':nama_pengepul', $nama_pengepul);
		$query->bindparam(':jenis_kelamin', $jenis_kelamin);
		$query->bindparam(':hp_pengepul', $hp_pengepul);
		$query->bindparam(':alamat_pengepul', $alamat_pengepul);
		
		$query->execute();

		
		echo "<script>
			setTimeout(function () {
				Swal.fire({
					type: 'success',
					title: 'Sukses menambah data Pengepul!',
					toast: true,
  					showConfirmButton: true,
  					background:'#91F563'
				}).then(function() {
					window.location.href = 'data_pengepul.php';
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
          
        }catch(PDOException $e){
            echo $e->getMessage();
        }
	
?>