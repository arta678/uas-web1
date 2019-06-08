<?php 

try {
  	include "koneksi.php";

	$id_sampah = $_POST['id_sampah']; 
	// $a = implode(",", $id_sampah);
	// echo $a;
	$query = "DELETE FROM sampah WHERE id_sampah IN(".implode(",", $id_sampah).")";
	$sql = $koneksi->prepare($query);
	$sql->execute(); 
	header("location: data_sampah.php");
}


catch(Exception $e) {

  echo 'Message: ' .$e->getMessage();
}


 ?>