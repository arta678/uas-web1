<?php 
try {
  	include "koneksi.php";
	$id_pengepul = $_POST['id_pengepul']; 
	$query = "DELETE FROM pengepul WHERE id_pengepul IN(".implode(",", $id_pengepul).")";
	$sql = $koneksi->prepare($query);
	$sql->execute(); 
	header("location: data_pengepul.php");
}


catch(Exception $e) {

  echo 'Message: ' .$e->getMessage();
}


 ?>