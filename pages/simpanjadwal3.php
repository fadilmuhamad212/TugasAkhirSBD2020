<?php
  include "koneksi.php";
  $id_kereta = $_POST['id_kereta'];
  $id_masinis = $_POST['id_masinis'];
  $nama_kereta = $_POST['nama_kereta'];
  $jam_kedatangan = $_POST['jam_kedatangan'];
  $jam_keberangkatan = $_POST['jam_keberangkatan'];
  $estimasi_waktu = $_POST['estimasi_waktu'];
  $kelas_tersedia = $_POST['kelas_tersedia'];

  $query = mysqli_query($koneksi, "INSERT INTO jogjakarta VALUES ('$id_kereta', '$id_masinis', '$nama_kereta', '$jam_kedatangan', '$jam_keberangkatan','$estimasi_waktu','$kelas_tersedia')") or die(mysqli_error($koneksi));
	if ($query) {
		header('location:datajadwaljogjakarta.php?message=success');
	}
  exit();
?>