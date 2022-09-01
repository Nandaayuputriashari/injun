<?php

  //panggil koneksi database
  require_once "koneksipenkp.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENDAFTARAN KERJA PRAKTEK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">

        <!-- Table -->
        <div class="mt-3">
            <h3 class="text-center">Pendaftaran Kerja Praktek</h3>
            <h3 class="text-center"></h3>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Data Pendaftaran KP
            </div>
            <div class="card-body">



              <!-- isi table -->
                <table class="table table-bordered table-striped table-hover">
                  <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Tempat KP</th>
                    <th>Alamat KP</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Proposal</th>
                    <th>Kelompok</th>
                    <th>Dosen Pembimbing</th>
                    <th>Aksi</th>
                    
                  </tr>

                  <?php
                  
                  //persiapan menampilkan data
                  $no = 1;
                  $tampil = mysqli_query($koneksi, "SELECT * FROM tb_pendkp ORDER BY id ASC");
                  while($data = mysqli_fetch_array($tampil)) :

                  ?>

                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['id']?></td>
                    <td><?= $data['tempt_kp']?></td>
                    <td><?= $data['alamt_kp']?></td>
                    <td><?= $data['tanggl_mulai']?></td>
                    <td><?= $data['tanggl_selesai']?></td>
                    <td><?= $data['propsl']?></td>
                    <td><?= $data['anggta_kelompok']?></td>
                    <td><?= $data['dosen']?></td>
                    <td>
                      <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalSetujui<?= $no ?>">Setujui</a>
                      <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTolak<?= $no ?>">Tolak</a>
                    </td>
                  </tr>

                <!-- Modal tombol setujui -->
                <div class="modal fade" id="modalSetujui<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Setujui</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <form method="POST" action="aksi_curdpenkp.php">
                        <input type="hidden" name="id">

                      <div class="modal-body">
                          
                          <h5 class="text-center">APAKAH ANDA YAKIN INGIN MENYETUJUI??</h5>

                      </div>
                      <div class="modal-footer">
                        <button type="submite" class="btn btn-success" name="bSetujui">Setujui</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Modal Akhir -->


                <!-- Modal tombol tolak -->
                <div class="modal fade" id="modalTolak<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Tolak </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <form method="POST" action="aksi_curdpenkp.php">
                        <input type="hidden" name="id">

                      <div class="modal-body">
                          
                          <h5 class="text-center">APAKAH ANDA YAKIN INGIN MENOLAK??</h5>


                      </div>
                      <div class="modal-footer">
                        <button type="submite" class="btn btn-danger" name="bTolak">Tolak</button>
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Modal Akhir -->

                  <?php endwhile; ?>
                </table>
                

                <!-- Modal tambah data -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Form Data Mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <form method="POST" action="aksi_curdpenkp.php">
                      <div class="modal-body">
                          
                          <div class="mb-3">
                              <label class="form-label">Nim</label>
                              <input type="text" class="form-control" name="tid" placeholder="masukkan nim anda">
                          </div>

                          <div class="mb-3">
                              <label class="form-label">TempatKp</label>
                              <select class="form-select" name="ttempt_kp">
                                <option></option>
                                <option value="Politeknik Negeri Banyuwangi">Politeknik Negeri Banyuwangi</option>
                              </select>
                          </div>

                          <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <input type="text" class="form-control" name="talamt_kp" placeholder="masukkan alamat anda">
                          </div>

                          <div class="mb-3">
                              <label class="form-label">Tanggal Mulai</label>
                              <input type="date" class="form-control" name="ttanggl_mulai">
                          </div>

                          <div class="mb-3">
                              <label class="form-label">Tanggal Selesai</label>
                              <input type="date" class="form-control" name="ttanggl_selesai">
                          </div>

                          <div class="mb-3">
                              <label class="form-label">Proposal</label>
                              <input type="file" class="form-control" name="tpropsl">
                          </div>

                          <div class="mb-3">
                              <label class="form-label">Kelompok</label>
                              <input type="text" class="form-control" name="tanggta_kelompok" placeholder="masukkan kelompok anda">
                          </div>

                          <div class="mb-3">
                              <label class="form-label">Dosen Pembimbing</label>
                              <select class="form-select" name="tdosen">
                                <option></option>
                                <option value="Lutfi Hakim S.Pd.,M.T">Lutfi Hakim S.Pd.,M.T</option>
                              </select>
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="submite" class="btn btn-primary" name="bsimpan">simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">keluar</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Modal Akhir -->
            
            </div>
        </div>

    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>