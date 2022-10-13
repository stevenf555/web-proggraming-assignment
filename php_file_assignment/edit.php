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
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-4">
    </div>
    <div class="px-5">
      <div class="bg-success p-2 d-flex justify-content-between">
          <h1 class="text-start text-white p-3 mb-2 float-start">Edit Karyawan</h1>
          <div>
            <a href="index.php">
              <button type="button" class="btn btn-light float-end me-5 mt-3 p-3" href="edit.php">Home</button>
            </a>
          </div>
      </div>
    </div>

        <?php

        $id = $_GET['id'];

        $sql = "SELECT * FROM karyawan WHERE id='$id'";

        $result = mysqli_query($conf,$sql);

        while($row = mysqli_fetch_array($result)){
        
        ?>
    <form action="update.php" method="post">
    <div class="mb-3 mt-3" style="padding-left:65px;padding-right:50px">
        <label for="nama" class="form-label ml-5"><h4>Nama</h4></label>
        <input type="text" class="form-control" name="nama" value="<?php echo $row['Nama_Karyawan']?>">
    </div>
    <div class="mb-3 mt-3" style="padding-left:65px;padding-right:50px">
        <label for="tempat_lahir" class="form-label ml-5"><h4>Tempat Lahir</h4></label>
        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['Tempat_Lahir']?>">
    </div>
    <div class="mb-3 mt-3" style="padding-left:65px;padding-right:50px">
        <label for="jabatan" class="form-label ml-5"><h4>Jabatan</h4></label>
        <input type="text" class="form-control" name="jabatan" value="<?php echo $row['Jabatan']?>">
    </div>
    <div class="mb-3 mt-3" style="padding-left:65px;padding-right:50px">
        <input type="hidden" class="form-control" name="id" value="<?php echo $row['ID']?>">
    </div>
  <button type="submit" class="btn btn-primary mt-3" style="margin-left:65px">Submit</button>
</form>
    </body>
    <?php } ?>
</html>