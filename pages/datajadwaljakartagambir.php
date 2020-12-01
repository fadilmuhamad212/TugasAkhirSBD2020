<html>
<head>
    <title>JADWAL KERETA API</title>
    <link rel="stylesheet" type="text/css" href="../pages/style.css">
</head>
<body>
<div class="bingkai">
		<div class="header">
			<h1>JADWAL KERETA API JAKARTA - GAMBIR</h1>
		</div>
	<br/>
	<form action="tambahjadwal.php">
    <input type="submit" value="Tambah Data Jadwal Kereta" />
    </form>
    <br/>
    <form action="home.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>ID KERETA</th>
            <th>ID MASINIS</th>
			<th>NAMA KERETA</th>
			<th>JAM KEDATANGAN</th>
			<th>JAM KEBERANGKATAN</th>
            <th>ESTIMASTI WAKTU</th>
            <th>KELAS TERSEDIA</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM jakartagambir");
                        while ($baris = mysqli_fetch_assoc($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_kereta']; ?></td>
                      <td><?php echo $baris['id_masinis']; ?></td>
      				  <td><?php echo $baris['nama_kereta']; ?></td>
      				  <td><?php echo $baris['jam_kedatangan']; ?></td>
      				  <td><?php echo $baris['jam_keberangkatan']; ?></td>
                      <td><?php echo $baris['estimasi_waktu']; ?></td>
                      <td><?php echo $baris['kelas_tersedia']; ?></td>
                      <td align="center">
                      <a href="editkereta.php?id_kereta=<?php echo $baris['id_kereta']; ?>">EDIT</a>
                      <a href="keretahapus.php?id_kereta=<?php echo $baris['id_kereta']; ?>">HAPUS</a>
      						</td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  