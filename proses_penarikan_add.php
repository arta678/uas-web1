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


			
				if(isset($_POST['submit'])) {
					try {	
					$id_penarikan= $_POST['id_penarikan'];
					$tanggal = 'NOW()';
					$id_nasabah = $_POST['id_nasabah'];
					$jumlah_tarik = $_POST['jumlah_tarik'];



					// //insert data to database
					$sql = "INSERT INTO penarikan_saldo VALUES (:id_penarikan, NOW(), :jumlah_tarik, :id_nasabah)";
					$query = $koneksi->prepare($sql);
					$query->bindparam(':id_penarikan',$id_penarikan);
					$query->bindparam(':id_nasabah', $id_nasabah);
					$query->bindparam(':jumlah_tarik', $jumlah_tarik);
					$query->execute();
					header("location: data_penarikan.php");
					
					}catch (Exception $e) {
							echo $e->getMessage();
							
						}

				
			}
	
	
          
       
	
?>