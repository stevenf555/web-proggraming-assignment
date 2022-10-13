<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "perusahaan";

$conf = mysqli_connect($server,$db_username,$db_password,$database);
if(mysqli_connect_errno()){
    throw new Exception("MySQL connection error:".mysqli_connect_error());
}

$id = $_GET['id'];

mysqli_query($conf,"DELETE FROM karyawan WHERE ID = '$id'");

header("Location: index.php");
?>