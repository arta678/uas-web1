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
					$id_setoran= $_POST['id_setoran'];
					// $tanggal = $_POST['tanggal'];
					$tanggal = 'NOW()';
					$id_nasabah = $_POST['id_nasabah'];
					$id_sampah = $_POST['id_sampah'];
					$berat_setoran = $_POST['berat_setoran'];
					$keterangan = "Setoran";
					$harga_sampah = $_POST['harga_datang'];
					$total_setoran= 0;



					// //insert data to database
					$sql = "INSERT INTO setoran_sampah VALUES (:id_setoran, NOW(), :id_nasabah, :id_sampah, :berat_setoran,:total_setoran,:keterangan)";
					$query = $koneksi->prepare($sql);
					$query->bindparam(':id_setoran',$id_setoran);
					// $query->bindparam(':tanggal', $tanggal);
					$query->bindparam(':id_nasabah', $id_nasabah);
					$query->bindparam(':id_sampah', $id_sampah);
					$query->bindparam(':berat_setoran', $berat_setoran);
					$query->bindparam(':total_setoran', $total_setoran);
					$query->bindparam(':keterangan', $keterangan);
					$query->execute();
					header("location: data_setoran.php");
					
					}catch (Exception $e) {
							echo $e->getMessage();
							
						}

				
			}
	
	
          
       
	
?>