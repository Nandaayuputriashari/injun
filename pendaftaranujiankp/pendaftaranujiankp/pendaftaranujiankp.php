<?php
//panggil koneksi
include "koneksi.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Ujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <!-- awal container-->
    <div class="container">
  <h3 class="text-center">PENDAFTARAN UJIAN</h3>

  <!-- awal row-->
  <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card">
  <div class="card-header bg-info text-light">
    Form Pendaftaran
  </div>
  <div class="card-body">
    <!--awal form-->
    <form method="POST">
    <div class="mb-3">
  <label class="form-label">NIM</label>
  <input type="text" name="tnim" value="<?=$vnim ?>" class="form-control"  placeholder="masukan nim">
</div>

<div class="mb-3">
  <label class="form-label">Nama</label>
  <input type="text" name="tnama" value="<?=$vnama ?>" class="form-control"  placeholder="masukan nama">
</div>

<div class="mb-3">
  <label class="form-label">kelas</label>
<select class="form-select" name="tkelas" >
  <option value="<?=$vkelas ?>"><?=$vkelas ?></option>
  <option value="1A">1A</option>
  <option value="1B">1B</option>
  <option value="1C">1C</option>
  <option value="1D">1D</option>
  <option value="1E">1E</option>
  <option value="1F">1F</option>
</select>

<div class="mb-3">
  <label class="form-label">Laporan</label>
  <input type="file" name="tlaporan" value="<?=$vlaporan ?>" class="form-control">
</div>

<label class="form-label">dosen</label>
<select class="form-select" name="tdosen" >
<option value="<?=$vdosen ?>"><?=$vdosen ?></option>
  <option value="pak lutfi">pak lutfi</option>
  <option value="pak farizqi">pak farizqi</option></select>
</div>

<div class="mb-3">
  <label class="form-label">tanggal ujian</label>
  <input type="date" name="ttanggal" value="<?=$vjadwalujian ?>" class="form-control" >
</div>
<div class="text-center">
    <hr>
    <button class="btn btn-primary" name="bsimpan" type="submit">simpan</button>
    <button class="btn btn-danger" name="bkosongkan" type="reset">kosongkan</button>
</div>
    </form>
    <!--akhir form-->
    
  </div>
  <div class="card-footer bg-info">
   
  </div>
</div>
    </div>
  </div>
<!-- akhir row-->
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
                <a href="pendaftaranujiankp.php?hal=edit&id=<?=$data['id'] ?>" class="btn btn-warning">edit</a>

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
    <!--akhir container-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>