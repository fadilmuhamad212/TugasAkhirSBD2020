<!DOCTYPE html>
<html>
<head>
	<title>SISTEM INFORMASI KERETA API</title>
</head>
<body>

	<h2>SISTEM INFORMASI KERETA API</h2>
	<br/>
	<a href="datajadwaljakartagambir.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA JADWAL KERETA API</h3>
	<form method="post" action="simpanjadwal.php">
		<table>
            <tr>			
				<td>ID KERETA</td>
				<td><input type="text" name="id kereta" class="form-control" required="" disabled></td>
			</tr>
			<tr>			
				<td>ID MASINIS</td>
				<td><input type="text" name="id kereta"></td>
            </tr>
			<tr>			
				<td>NAMA KERETA</td>
				<td><input type="text" name="nama kereta"></td>
            </tr>
            <tr>			
				<td>JAM KEDATANGAN</td>
				<td><input type="text" name="jam kedatangan"></td>
			</tr>
			<tr>
				<td>JAM KEBERANGKATAN</td>
				<td><input type="text" name="jam keberangkatan"></td>
			</tr>
			<tr>
				<td>ESTIMASI WAKTU</td>
				<td><input type="text" name="estimasi waktu"></td>
            </tr>
            <tr>			
				<td>KELAS TERSEDIA</td>
				<td><input type="text" name="kelas tersedia"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>