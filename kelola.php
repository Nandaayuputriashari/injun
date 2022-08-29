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
                <nav class="navbar bg-light mb-4">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            Uploud Nilai Mahasiswa
                        </a>
                    </div>
                </nav>
                <div class="container">
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            NIM
                        </label>
                        <div class="col-sm-10">
                            <input type="teks" class="form-control" id="NIM" placeholder="ex: 11111">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            NAMA
                        </label>
                        <div class="col-sm-10">
                            <input type="teks" class="form-control" id="NIM" placeholder="ex: Ahmad">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            Mata Kuliah
                        </label>
                        <div class="col-sm-10">
                            <input type="teks" class="form-control" id="NIM" placeholder="ex: Matematika">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            Absensi
                        </label>
                        <div class="col-sm-10">
                            <input type="teks" class="form-control" id="NIM" placeholder="ex: 0-100">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            UTS
                        </label>
                        <div class="col-sm-10">
                            <input type="teks" class="form-control" id="NIM" placeholder="ex: 11111">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            Tugas
                        </label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">100</option>
                                <option value="2">90</option>
                                <option value="3">80</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            UAS
                        </label>
                        <div class="col-sm-10">
                            <input type="teks" class="form-control" id="NIM" placeholder="ex: 11111">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">
                            Nilai Huruf
                        </label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col">
                            <a href="indeks2.php" button type="button" class="btn btn-primary">
                                Tambahkan
                                </button>
                                <a href="unggah.html" type="button" class="btn btn-danger">
                                    Batal
                                    </button>
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