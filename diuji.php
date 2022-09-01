<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="datamas.css">

    <title>Poliwangi Dosen</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <img class="bx bxs-smile" src="img/poliwangi.png" alt="" width="50px">
            <span class="text">Poliwangi</span>
        </a>
        <ul class="side-menu top">
            <li class="#">
                <a href="dashboard.php">
                    <i class='bx bxs-home'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="#">
                <a href="datamas.php">
                    <i class='bx bxs-face'></i>
                    <span class="text">Data Mahasiswa</span>
                </a>
            </li>
            <li class="#">
                <a href="datamas.php">
                    <i class='bx bxs-'></i>
                    <span class="text">Bimbingan</span>
                </a>
            </li>
            <li class="active">
                <a href="diuji.php">
                    <i class='bx bxs-'></i>
                    <span class="text">Diuji</span>
                </a>
            </li>
            <li>
                <a href="unggah.php">
                    <i class='bx bxs-cloud-upload'></i>
                    <span class="text">Upload Nilai</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="logout.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link"></a>
            <form action="#">
                <div class="form-input">
                </div>
            </form>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->

        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Data Mahasiswa</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Diuji</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>DATA MAHASISWA</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

            </head>

            <body>

                <div class="container">


                    <div class="card mt-3">
                        <div class="card-header bg-primary text-white">
                            Mahasiswa Diuji
                        </div>
                        <div class="card-body">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                Tambah Data
                            </button>

                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No.</th>
                                    <th>Nim</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Diuji</th>
                                    <th>Aksi</th>
                                </tr>

                                <?php
                                //persiapan menampilkan data
                                $no = 1;
                                include "konek.php";
                                $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs ORDER BY id_mhs DESC");
                                while ($data = mysqli_fetch_array($tampil)) :
                                ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nim'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['diuji'] ?></td>
                                        <td>
                                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Ubah</a>
                                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                                        </td>
                                    </tr>

                                    <!-- Awal Modal Ubah -->
                                    <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Form Data Mahasiswa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form method="POST" action="aksi.php">
                                                    <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">

                                                    <div class="modal-body">


                                                        <div class="mb-3">
                                                            <label class="text">NIM</label>
                                                            <input type="text" class="form-control" name="tnim" value="<?= $data['nim'] ?>" placeholder="Masukkan NIM Anda!">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="text">Nama Lengkap</label>
                                                            <input type="text" class="form-control" name="tnama" value="<?= $data['nama'] ?>" placeholder="Masukkan Nama Lengkap Anda!">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Alamat</label>
                                                            <textarea class="form-control" name="talamat" rows="3"><?= $data['alamat'] ?></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Diuji</label>
                                                            <select class="form-select" name="tdiuji">
                                                                <option value="<?= $data['diuji'] ?>"><?= $data['diuji'] ?></option>
                                                                <option value="Sudah">Sudah</option>
                                                                <option value="Belum">Belum</option>
                                                            </select>
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
                                    <!-- Akhir Modal Ubah -->


                                    <!-- Awal Modal Hapus -->
                                    <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form method="POST" action="aksi.php">
                                                    <input type="hidden" name="id_mhs" value="<?= $data['id_mhs'] ?>">

                                                    <div class="modal-body">

                                                        <h5 class="text-center">Apakah Anda Yakin Akan Menghapus Data Ini? <br>
                                                            <span class="text-danger"><?= $data['nim'] ?> - <?= $data['nama'] ?></span>
                                                        </h5>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" name="bhapus">Ya Silahkan Dihapus!</button>
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Akhir Modal Hapus -->

                                <?php endwhile; ?>
                            </table>



                            <!-- Awal Modal -->
                            <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Form Data Mahasiswa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <form method="POST" action="aksi.php">
                                            <div class="modal-body">


                                                <div class="mb-3">
                                                    <label class="text">NIM</label>
                                                    <input type="text" class="form-control" name="tnim" placeholder="Masukkan NIM Anda!">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="text">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Lengkap Anda!">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Alamat</label>
                                                    <textarea class="form-control" name="talamat" rows="3"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Diuji</label>
                                                    <select class="form-select" name="tdiuji">
                                                        <option></option>
                                                        <option value="Sudah">Sudah</option>
                                                        <option value="Belum">Belum</option>
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


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
            </body>
            </ul>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>