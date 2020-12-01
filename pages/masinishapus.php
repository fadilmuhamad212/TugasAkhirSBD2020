<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_masinis = $_GET['id_masinis'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM masinis WHERE id_masinis=$id_masinis") or die(mysqli_error());

	if ($query) {
		header('location:datamasinis.php?message=delete');
	}
?>