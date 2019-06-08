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
	if(isset($_POST['submit-nasabah-tambah'])) {
		$id_nasabah = $_POST['id_nasabah'];
		$nama_nasabah = $_POST['nama_nasabah'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$hp_nasabah = $_POST['hp_nasabah'];
		$alamat_nasabah = $_POST['alamat_nasabah'];
		$saldo_nasabah ='0';
		//insert data to database
		$sql = "INSERT INTO nasabah VALUES (:id_nasabah, :nama_nasabah, :jenis_kelamin, :hp_nasabah, :alamat_nasabah,:saldo_nasabah )";
		$query = $koneksi->prepare($sql);
		$query->bindparam(':id_nasabah', $id_nasabah);
		$query->bindparam(':nama_nasabah', $nama_nasabah);
		$query->bindparam(':jenis_kelamin', $jenis_kelamin);
		$query->bindparam(':hp_nasabah', $hp_nasabah);
		$query->bindparam(':alamat_nasabah', $alamat_nasabah);
		$query->bindparam(':saldo_nasabah', $saldo_nasabah);
		
		$query->execute();

		
		echo "<script>
			setTimeout(function () {
				Swal.fire({
					type: 'success',
					title: 'Sukses menambah data Nasabah!',
					toast: true,
  					showConfirmButton: true,
  					background:'#91F563'
				}).then(function() {
					window.location.href = 'data_nasabah.php';
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