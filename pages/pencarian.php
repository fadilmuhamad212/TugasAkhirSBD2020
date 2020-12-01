<!DOCTYPE html>
<html>
<head>
	<title>SISTEM INFORMASI JADWAL KERETA API</title>
	<link rel="stylesheet" type="text/css" href="../pages/style.css">
</head>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
<body>

<div class=bingkai>
<div class=header><h2>Pencarian Masinis</h2></div>
<form action="pencarian.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
    <br/>
    <form action="home.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>ID MASINIS</th>
		<th>ID KERETA</th>
        <th>NAMA MASINIS</th>
        <th>NIP</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi, "SELECT * from masinis where nama_masinis like '%".$cari."%' OR id_masinis like '%".$cari."%' OR nip like '%".$cari."%' order by id_masinis asc	");				
	}else{
		$data = mysqli_query($koneksi, "SELECT * from masinis order by id_masinis asc");		
	}
	$no = 1;
	while($d = mysqli_fetch_assoc($data)){
	?>
	<tr>
		<td><?php echo $d['id_masinis']; ?></td>
        <td><?php echo $d['id_kereta']; ?></td>
		<td><?php echo $d['nama_masinis']; ?></td>
        <td><?php echo $d['nip']; ?></td>
	</tr>
	<?php } ?>
</table>
		<div class="clear"></div>
		<div class="footer">
			Copyright of PT.Gendon 2020
		</div>
        </div>
</body>
</html>