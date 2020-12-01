<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_masinis = $_POST['id_masinis'];
    $id_kereta = $_POST['id_kereta'];
    $nama_masinis = $_POST['nama_masinis'];
    $nip = $_POST['nip'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE masinis SET id_kereta='$id_kereta', nama_masinis='$nama_masinis',nip='$nip' WHERE id_masinis='$id_masinis'");

    // Redirect to homepage to display updated user in list
    header("Location: datamasinis.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_masinis = $_GET['id_masinis'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM masinis WHERE id_masinis=$id_masinis");

while($user_data = mysqli_fetch_assoc($result))
{
    $id_masinis = $user_data['id_masinis'];
    $id_kereta = $user_data['id_kereta'];
    $nama_masinis = $user_data['nama_masinis'];
    $nip = $user_data['nip'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="home.php">Home</a>
    <br/><br/>

    <h2>Data Masinis</h2>

    <form method="post" action="editmasinis.php">
        <table border="1">
        <tr> 
                <td>Id Kereta</td>
                <td><input type="text" name="id_kereta" value="<?php print("$id_kereta");?>"></td>
            </tr>
            <tr> 
                <td>Nama Masinis</td>
                <td><input type="text" name="nama_masinis" value="<?php print("$nama_masinis");?>"></td>
            </tr>
            <tr> 
                <td>NIP</td>
                <td><input type="text" name="nip" value="<?php print("$nip");?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_masinis" value=<?php echo $_GET['id_masinis'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
