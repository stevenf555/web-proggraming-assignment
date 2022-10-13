<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "perusahaan";

$conf = mysqli_connect($server,$db_username,$db_password,$database);
if(mysqli_connect_errno()){
    throw new Exception("MySQL connection error:".mysqli_connect_error());
}

$id = $_POST['id'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$jabatan = $_POST['jabatan'];

mysqli_query($conf,"UPDATE karyawan SET Nama_Karyawan = '$nama', Tempat_Lahir = '$tempat_lahir', Jabatan = '$jabatan' WHERE ID = '$id'");

header("Location: index.php");
?>