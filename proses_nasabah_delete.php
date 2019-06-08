<?php 

try {
  	include "koneksi.php";
  	
	$id_nasabah = $_POST['id_nasabah']; 
	// $a = implode(",", $id_sampah);
	// echo $a;
	$query = "DELETE FROM nasabah WHERE id_nasabah IN(".implode(",", $id_nasabah).")";
	$sql = $koneksi->prepare($query);
	$sql->execute(); 
	header("location: data_nasabah.php");
}


catch(Exception $e) {

  echo 'Message: ' .$e->getMessage();
}


 ?>