

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Pendaftaran Kerja Praktek</title>
</head>
<body>
    <div style="background-color: #FFFF ;" class="container p-3 my-3 border">
        <h1 class="text-center">PENDAFTARAN KERJA PRAKTEK</h1>
        <form id="form" method="POST">
            <div class="alert alert-secondary">
                <strong>DATA DIRI</strong>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tempat Kerja Praktek</label>
                        <input type="text " name="NAMA" class="form-control" placeholder="Masukkan Tempat Kerja Praktek">
                    </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alamat Kerja Praktek</label>
                        <input type="text " name="Alamat" class="form-control" placeholder="Masukkan Alamat Kerja Praktek">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tanggal_Mulai :</label>
                        <input type="date" name="Tanggal_Mulai" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-grup">
                        <label>Tanggal_Selesai :</label>
                        <input type="date" name="Tanggal_Selesai" class="form-control">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <label>Proposal :</label>
                        <input type="file" name="file">
                    </div>
                </div>
            </div>             
                        <br>           
                        <button type="submit" name="Submite" class="btn btn-primary">DAFTAR</button>
                        <button type="reset" name="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
            <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud php mysql</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


    <!-- Awal Tabel Form -->
    <body>
        <div class="container">
          <div class="mt-3">
            <h3 class="text-center">Pendaftaran Kerja Praktek</h3>
        </div>

       <div class="card mt-3">
          <div class="card-header bg-success text-white">
            Data Mahasiswa Pendaftar
          </div>
          <div class="card-body">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#ModalTambah">
              Daftar
            </button>

            <table class="table table-bordered table-striped table-hover">
              <tr>
              <th>No</th>
                <th>Id</th>
                <th>Tempat</th>
                <th>Alamat</th>
                <th>Tgl Mulai</th>
                <th>Tgl Selesai</th>
                <th>Proposal</th>
                <th>Kelompok</th>
                <th>Dosen</th>
                <th>Perusahaan</th>
                <th>Aksi</th>
                </tr>

                <?php
                //persiapan menampilkan data
                $No = 1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM tb_pendaftarankp ORDER BY id DESC");
                while ($data = mysqli_fetch_array($tampil)) :
                ?>
              <tr>
                <td> <?= $No++ ?> </td>
                <td><?= $data['id'] ?></td>
                <td><?= $data['tempat_kp'] ?></td>
                <td><?= $data['alamat_kp'] ?></td>
                <td><?= $data['tanggal_mulai'] ?></td>
                <td><?= $data['tanggal_selesai'] ?></td>
                <td><?= $data['proposal'] ?></td>
                <td><?= $data['anggota_kelompok'] ?></td>
                <td><?= $data['dosen'] ?></td>
                <td><?= $data['perusahaan'] ?></td>
                <td>
                  <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalUbah<?= $No ?>">Ubah</a>
                  <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus<?= $No ?>">Hapus</a>
                </td>
              </tr>

              <!--Awal Modal ubah -->
              <div class=" modal fade" id="ModalUbah<?= $No ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="aksi_crud.php">
                      <input type="hidden" name="id" value="<?= $data['id'] ?>">
                      <div class="modal-body">

                      <div class="mb-3">
                        <label class="form-label">Tempat</label>
                        <input type="text" class="form-control" name="ttempat_kp" value="<?= $data['tempat_kp'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="talamat_kp" value="<?= $data['alamat_kp'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Tgl Mulai</label>
                        <input type="date" class="form-control" name="ttanggal_mulai" value="<?= $data['tanggal_mulai'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Tgl Selesai</label>
                        <input type="date" class="form-control" name="ttanggal_selesai" value="<?= $data['tanggal_selesai'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Proposal</label>
                        <input type="file" class="form-control" name="tproposal" value="<?= $data['proposal'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Kelompok</label>
                        <input type="text" class="form-control" name="tanggota_kelompok" value="<?= $data['anggota_kelompok'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Dosen</label>
                        <input type="text" class="form-control" name="tdosen" value="<?= $data['dosen'] ?>"> 
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Perusahaan</label>
                        <input type="text" class="form-control" name="tperusahaan" value="<?= $data['perusahaan'] ?>"> 
                      </div>

                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Akhir Modal ubah -->

              <!--Awal Modal hapus -->
              <div class="modal fade" id="ModalHapus<?= $No ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="aksi_crud.php">
                      <input type="hidden" name="id" value="<?= $data['id'] ?>">
                      <div class="modal-body">

                        <h5 class="text-center">Apakah anda yakin ingin menghapus data ini? <br>
                          <span class="text-danger"><?= $data['id'] ?></span>
                        </h5>

                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="bhapus">Ya</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Akhir Modal hapus -->



            <?php endwhile; ?>
          </table>


          <!--Awal Modal tambah data-->
          <div class="modal fade" id="ModalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="aksi_crud.php">
                  <div class="modal-body">

                    <div class="mb-3">
                      <label class="form-label">Id</label>
                      <input type="text" class="form-control" name="tid">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Tempat</label>
                      <input type="text" class="form-control" name="ttempat_kp"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="talamat_kp"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Tgl Mulai</label>
                      <input type="date" class="form-control" name="ttanggal_mulai"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Tgl Selesai</label>
                      <input type="date" class="form-control" name="ttanggal_selesai"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Proposal</label>
                      <input type="file" class="form-control" name="tproposal"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Kelompok</label>
                      <input type="text" class="form-control" name="tanggota_kelompok"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Dosen</label>
                      <input type="text" class="form-control" name="tdosen"> 
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Perusahaan</label>
                      <input type="text" class="form-control" name="tperusahaan"> 
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
          <!--Akhir Modal -->
    <!--Akhir Tabel Form -->

        </div>
      </div>
    </div class>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>

        </form>
    </div>
</body>