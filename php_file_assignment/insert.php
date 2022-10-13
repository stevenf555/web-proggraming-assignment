<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "perusahaan";

$conf = mysqli_connect($server,$db_username,$db_password,$database);
if(mysqli_connect_errno()){
    throw new Exception("MySQL connection error:".mysqli_connect_error());
}

$id = $_REQUEST['id'];
$nama = $_REQUEST['nama'];
$tempat_lahir = $_REQUEST['tempat_lahir'];
$jabatan = $_REQUEST['jabatan'];

$sql = "INSERT INTO karyawan VALUES ('$id', '$nama', '$tempat_lahir', '$jabatan')";

mysqli_query($conf, $sql);

header("Location: index.php");

?>