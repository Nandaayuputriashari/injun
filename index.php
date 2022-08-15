<?php

  //panggil koneksi
  include "koneksi.php";

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD - PHP & MySQL + Modal Bootstrap 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="mt-3">
      <h3 class="text-center">DATA MAHASISWA</h3>
      <h3 class="text-center">POLITEKNIK NEGERI BANYUWANGI</h3>
    </div>
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">
        Data Mahasiswa
      </div>
      <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
          Tambah Data
        </button>

        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Aksi</th>
          </tr>

          <tr>
            <td>1</td>
            <td>362155401098</td>
            <td>Nanda Ayu Putri Ashari</td>
            <td>Singojuruh</td>
            <td>D3 Teknik Infromatika</td>
            <td>
              <a href="#" class="btn btn-warning">Ubah</a>
              <a href="#" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        </table>


        <!-- Awal Modal -->
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" action="aksi_crud.php">

              <div class="modal-body">

                  <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" class="form-control" name="tnim" placeholder="Masukkan NIM Anda!">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Lengkap Anda!">
                  </div>



                  <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="talamat" rows="3"></textarea>

                    </select> 
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Prodi</label>
                    <select class="form-select" name="tprodi">
                    <option></option>
                    <option value="D3 - Teknik Informatika">D3 - Teknik Informatika</option>
                    <option value="D3 - Teknik Mesin">D3 - Teknik Mesin</option>
                    <option value="D3 - Teknik Sipil">D3 - Teknik Sipil</option>
                    <option value="D4 - Agribisnis">D4 - Agribisnis</option>
                    <option value="D4 - Manajemen Bisnis Pariwisata">D4 - Manajemen Bisnis Pariwisata</option>
                    <option value="D4 - Teknologi Pengolahan Hasil Ternak">D4 - Teknologi Pengolahan Hasil Ternak</option>
                    <option value="D4 - Teknik Manufaktur Kapal">D4 - Teknik Manufaktur Kapal</option>
                  </select>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Akhir Modal -->
      </div>
    </div>


  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>