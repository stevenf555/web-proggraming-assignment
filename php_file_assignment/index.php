<?php
$server = "localhost";
$db_username = "root";
$db_password = "";
$database = "perusahaan";

$conf = mysqli_connect($server,$db_username,$db_password,$database);
if(mysqli_connect_errno()){
    throw new Exception("MySQL connection error:".mysqli_connect_error());
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-4">
    </div>
    <div class="px-5">
      <div class="bg-success p-2 d-flex justify-content-between">
          <h1 class="text-start text-white p-3 mb-2 float-start">Daftar Karyawan</h1>
          <div>
            <a href="add.php">
              <button type="button" class="btn btn-light float-end me-5 mt-3 p-3">Tambah Karyawan</button>
            </a>
          </div>
      </div>
    </div>
      <div class="mt-3 px-5">
      <table class="table">
      <thead>
        <tr>
          <th scope="col"><h3>ID</h3></th>
          <th scope="col"><h3>Nama Karyawan</h3></th>
          <th scope="col"><h3>Tempat Lahir</h3></th>
          <th scope="col"><h3>Jabatan</h3></th>
          <th scope="col"><h3>Actions</h3></th>
        </tr>
      </thead>

      <tbody class="table-group-divider"  >

      <?php

            $sql = "SELECT * FROM karyawan";
            $result = mysqli_query($conf,$sql);

            if(mysqli_num_rows($result) > 0 ){

              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<th scope='col'>{$row['ID']}</th>";
                echo "<th scope='col'>{$row['Nama_Karyawan']}</th>";
                echo "<th scope='col'>{$row['Tempat_Lahir']}</th>";
                echo "<th scope='col'>{$row['Jabatan']}</th>";
                echo "<th scope='col'><a href='edit.php?id=$row[ID]'><button type='submit' class='btn btn-primary'>Edit</button></a> <a href='delete.php?id=$row[ID]'><button type='submit' class='btn btn-danger'>Delete</button></th></a>";
                echo "<tr>";
              }
            }

          else{
            echo "<tr>";
            echo "<td colspan='5' class='text-center fs-5'>Belum ada karyawan yang ditambahkan, silahkan klik button tambah karyawan terlebih dahulu</td>";
            echo "</tr>";
          }

        ?> 

    </tbody>
    </div>
   </body>
</html>