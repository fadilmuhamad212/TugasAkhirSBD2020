<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_kereta = $_POST['id_kereta'];
    $id_masinis = $_POST['id_masinis'];
    $nama_kereta = $_POST['nama_kereta'];
    $jam_kedatangan = $_POST['jam_kedatangan'];
    $jam_keberangkatan = $_POST['jam_keberangkatan'];
    $estimasi_waktu = $_POST['estimasi_waktu'];
    $kelas_tersedia = $_POST['kelas_tersedia'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE jogjakarta SET nama_kereta='$nama_kereta',jam_kedatangan='$jam_kedatangan',jam_keberangkatan='$jam_keberangkatan',estimasi_waktu='$estimasi_waktu',kelas_tersedia='$kelas_tersedia' WHERE id_kereta=$id_kereta");

    // Redirect to homepage to display updated user in list
    header("Location: datajadwaljogjakarta.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_kereta = $_GET['id_kereta'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM jogjakarta WHERE id_kereta=$id_kereta");

while($user_data = mysqli_fetch_assoc($result))
{
    $id_kereta = $user_data['id_kereta'];
    $id_masinis = $user_data['id_masinis'];
    $nama_kereta = $user_data['nama_kereta'];
    $jam_kedatangan = $user_data['jam_kedatangan'];
    $jam_keberangkatan = $user_data['jam_keberangkatan'];
    $estimasi_waktu = $user_data['estimasi_waktu'];
    $kelas_tersedia = $user_data['kelas_tersedia'];
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../pages/style.css">  
    <div class=header><title>Edit User Data</title></div>
    
</head>

<body>
<div class="bingkai">
    
    <br/><br/>

    <div class=header><h2>Jadwal Kereta</h2></div>

    <form method="post" action="editkereta3.php">
        <table border="1">
            <tr> 
                <td>Id Masinis</td>
                <td><input type="text" name="id_masinis" value="<?php print("$id_masinis");?>"></td>
            </tr>
            <tr> 
                <td>Nama Kereta</td>
                <td><input type="text" name="nama_kereta" value="<?php print("$nama_kereta");?>"></td>
            </tr>
            <tr> 
                <td>Jam Kedatangan</td>
                <td><input type="text" name="jam_kedatangan" value="<?php print("$jam_kedatangan");?>"></td>
            </tr>
            <tr> 
                <td>Jam Keberangkatan</td>
                <td><input type="text" name="jam_keberangkatan" value="<?php echo $jam_keberangkatan;?>"></td>
            </tr>
            <tr> 
                <td>Estimasi Waktu</td>
                <td><input type="text" name="estimasi_waktu" value="<?php echo $estimasi_waktu;?>"></td>
            </tr>
            <tr> 
                <td>Kelas Tersedia</td>
                <td><input type="text" name="kelas_tersedia" value="<?php echo $kelas_tersedia;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_kereta" value=<?php echo $_GET['id_kereta'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
        <a href="home.php">Home</a>
    </form>
    </div>
</body>
</html>
