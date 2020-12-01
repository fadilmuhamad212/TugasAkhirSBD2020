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
	<div class="bingkai">
		<div class="header">
			<h1>ABOUT US</h1>
		</div>
            <form action="home.php">
            <input type="submit" value="Kembali" />
            </form> 
		<div class="badan">
			<div class="sidebar">
				<ul>
                <?php
		            echo "<h2>Dibuat oleh Gendon & Friend</h2>";
	            ?>
				</ul>
			</div>
			<div class="content">
			<img src="../pages/Group 21.png" height="400px" width="600px" style="display: block; margin: auto;">
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			Copyright of PT.Gendon 2020
		</div>
	</div>
</body>
</html>