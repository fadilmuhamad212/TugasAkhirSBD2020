<html>
<head>
    <title>JADWAL KERETA API</title>
    <link rel="stylesheet" type="text/css" href="../pages/style.css">
</head>
<body>
<div class="bingkai">
		<div class="header">
			<h1>DAFTAR MASINIS</h1>
		</div>

    <form action="home.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>ID MASINIS</th>
            <th>ID KERETA</th>
			<th>NAMA MASINIS</th>
			<th>NIP</th>
		</tr>
<?php
    session_start();
    include "koneksi.php";
    if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    header("location:ceklogin.php");
    }
?>
      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT * FROM masinis");
                        while ($baris = mysqli_fetch_assoc($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_masinis']; ?></td>
                      <td><?php echo $baris['id_kereta']; ?></td>
      				  <td><?php echo $baris['nama_masinis']; ?></td>
                        <td><?php echo $baris['nip']; ?></td>
                        <td align="center">
                      <a href="editmasinis.php?id_masinis=<?php echo $baris['id_masinis']; ?>">EDIT</a>
                      <a href="masinishapus.php?id_masinis=<?php echo $baris['id_masinis']; ?>">HAPUS</a>
      						</td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  