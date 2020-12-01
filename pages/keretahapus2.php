<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_kereta = $_GET['id_kereta'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM jakartasenen WHERE id_kereta='$id_kereta'") or die(mysqli_error());

	if ($query) {
		header('location:datajadwaljakartasenen.php?message=delete');
	}
?>