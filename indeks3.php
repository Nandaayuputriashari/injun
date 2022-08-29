<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="unggah.css">
    <!-- CSS only -->

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
            <li>
                <a href="datamas.php">
                    <i class='bx bxs-face'></i>
                    <span class="text">Data Mahasiswa</span>
                </a>
            </li>
            <li class="#">
                <a href="datamas.php">
                    <i class='bx bxs-'></i>
                    <span class="text">Monitoring</span>
                </a>
            </li>
            <li class="#">
                <a href="diuji.php">
                    <i class='bx bxs-'></i>
                    <span class="text">Diuji</span>
                </a>
            </li>
            <li class="active">
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
							<a class="active" href="#">Unggah Nilai</a>
						</li>
                    </ul>
                </div>
            </div>
            <br>
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <script src="js/bootstrap.bundle.min.js"></script>

            <body>
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                        </a>
                    </div>
                </nav>

                <!--jUDUL -->
                <div class="container">
                    <a href="kelola.php" type="button" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Tambah data
                    </a>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>Mata Kuliah</th>
                                    <th>Absensi</th>
                                    <th>UTS</th>
                                    <th>Tugas</th>
                                    <th>UAS</th>
                                    <th>Nilai Huruf</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>01112</td>
                                    <td>Azka Azkiya</td>
                                    <td>PBO</td>
                                    <td>90</td>
                                    <td>90</td>
                                    <td>90</td>
                                    <td>90</td>
                                    <td>B</td>
                                    <td>
                                        <a href="kelola.php" button type="button" class="btn btn-success btn-sam">
                                            Ubah
                                            </button>
                                            <a href="unggah.php" button type="button" class="btn btn-danger btn-sam">
                                                Hapus
                                            </a>
                                    </td>
                                </tr>
            </body>
            </table>
            </div>
            </div>
</body>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->


<script src="script.js"></script>
</body>

</html>