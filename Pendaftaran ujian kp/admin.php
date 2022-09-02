<?php
//panggil koneksi
include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
     
     <div class="container">
  <h3 class="text-center">DATA PENDAFTARAN UJIAN</h3>
    <!-- membuat tabel untuk hasil mendaftar-->
<div class="card mt-3">
  <div class="card-header bg-info text-light">
    data Pendaftaran 
  </div>
  <div class="card-body">
    <table class="table table-striped">
        <tr>
            <th>no.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>kelas</th>
            <th>laporan</th>
            <th>dosen</th>
            <th>jadwal ujian</th>
            <th>aksi</th>
        </tr>
        <?php
        //persipan menampilkan data
        $no = 1;
        $tampil = mysqli_query($koneksi, "SELECT * FROM pendaftaran order by id desc");
        while($data = mysqli_fetch_array($tampil))  :
        ?>
        <tr>
            <td><?=$no++ ?></td>
            <td><?=$data['nim']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['kelas']?></td>
            <td><?=$data['laporan']?></td>
            <td><?=$data['dosen']?></td>
            <td><?=$data['jadwal']?></td>
            <td>
                <a href="pendaftaranujiankp.php?hal=edit&id=<?=$data['id'] ?>" class="btn btn-success">update</a>

                <a href="pendaftaranujiankp.php?hal=hapus&id=<?=$data['id'] ?>"
                 class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')">hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    
  </div>
  <div class="card-footer bg-info">
   
  </div>
</div>
  
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>