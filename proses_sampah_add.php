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

// PROSES TAMBAH DATA SAMPAH
try{
	if(isset($_POST['submit-sampah-tambah'])) {
		
		$nama_sampah = htmlspecialchars($_POST['nama_sampah']);
		$kategori_sampah = htmlspecialchars($_POST['kategori_sampah']);
		$harga_datang = htmlspecialchars($_POST['harga_datang']);
		$harga_jemput = htmlspecialchars($_POST['harga_jemput']);
		$harga_pengepul = htmlspecialchars($_POST['harga_pengepul']);
		$keterangan_sampah = htmlspecialchars($_POST['keterangan_sampah']);
		$stok_sampah = "0";
		//insert data to database
		$sql = "INSERT INTO sampah (id_sampah,nama_sampah,kategori_sampah,harga_datang,harga_pengepul,keterangan_sampah,stok_sampah) VALUES (:id_sampah, :nama_sampah, :kategori_sampah, :harga_datang, :harga_pengepul,:keterangan_sampah,:stok_sampah)";
		$query = $koneksi->prepare($sql);
		$query->bindparam(':id_sampah', $id_sampah);
		$query->bindparam(':nama_sampah', $nama_sampah);
		$query->bindparam(':kategori_sampah', $kategori_sampah);
		$query->bindparam(':harga_datang', $harga_datang);
		$query->bindparam(':harga_pengepul', $harga_pengepul);
		$query->bindparam(':keterangan_sampah', $keterangan_sampah);
		$query->bindparam(':stok_sampah', $stok_sampah);
		$query->execute();
		echo "<script>
			setTimeout(function () {
				Swal.fire({
					type: 'success',
					title: 'Sukses menambah data sampah!',
					toast: true,
  					showConfirmButton: true,
  					background:'#91F563'
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
          
        }catch(PDOException $e){
            echo $e->getMessage();
        }














        
	
?>