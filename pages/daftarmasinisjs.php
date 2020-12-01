<html>
<head>
    <title>JADWAL KERETA API</title>
    <link rel="stylesheet" type="text/css" href="../pages/style.css">
</head>
<body>
<div class="bingkai">
		<div class="header">
			<h1>DAFTAR MASINIS KERETA API JAKARTA - PASAR SENEN</h1>
		</div>
	<br/>
    <form action="../pages/home.php">
    <input type="submit" value="Kembali" />
    </form>
	<br/>
	<table border="1">
		<tr>
			<th>ID KERETA</th>
            <th>NAMA KERETA</th>
			<th>JAM KEBERANGKATAN</th>
            <th>NAMA MASINIS</th>
            <th>NIP MASINIS</th>
            <th>ID MASINIS</th>
		</tr>

      				 <?php include_once("koneksi.php");
      				  $hasil = mysqli_query ($koneksi, "SELECT jakartasenen.id_kereta, jakartasenen.nama_kereta, jakartasenen.jam_keberangkatan, masinis.nama_masinis,masinis.nip, masinis.id_masinis FROM masinis INNER JOIN jakartasenen ON masinis.id_masinis=jakartasenen.id_masinis");
                        while ($baris = mysqli_fetch_assoc($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id_kereta']; ?></td>
      				    <td><?php echo $baris['nama_kereta']; ?></td>
      				    
      				    <td><?php echo $baris['jam_keberangkatan']; ?></td>
                        <td><?php echo $baris['nama_masinis']; ?></td>
                        <td><?php echo $baris['nip']; ?></td>
                        <td><?php echo $baris['id_masinis']; ?></td>
                      </tr>
                    <?php
                }
                ?>
                </table>
            </body>
            </html>  