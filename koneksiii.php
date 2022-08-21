<?php
    // membuat koneksi database
    $host = 'localhost';
    $user = 'root';
    $pass = 'Bakuryu12';
    $db   = 'db_tugaspklutfi';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn){
        echo 'error :'.mysqli_connect_error($conn);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran ujian kp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .mx-auto{width:800px }
        .card{ margin-top: 10px ;}
    </style>
</head>
<body>
    <!-- untuk memasukan data -->
        <div class="mx-auto">
        <div class="card">
  <div class="card-header">
    Create / Edit Data 
  </div>
  <div class="card-body">
    <form action= "" method="POST">
    <div class="mb-3">
  <h3> Laporan KP </h3>

  <form action="" method="POST" enctype="multipart/form-data">
    <b>File Upload</b> <input type="file" name="NamaFile">
    <input type="submit" name="proses" value="upload">
  </form>
</div>
<div class="mb-3">
  <h3> Jadwal Ujian </h3>

  <form action="" method="POST" enctype="multipart/form-data">
    <b>File Upload</b> <input type="file" name="NamaFile">
    <input type="submit" name="proses" value="upload">
</div>

        
</div>
<div class="col-12">
    <input type="submit" name="simpan" value="simpan data" class="btn btn-primary"/>
</div>

    </form>
  </div>
</div>
<!-- untuk mengeluarkan data -->
<div class="card">
  <div class="card-header">
    pendaftaran ujian kp 
  </div>
  <div class="card-body">
   
  </div>
</div>
        </div>
    
</body>
</html>