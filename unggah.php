<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="unggah.css">

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
			<li >
				<a href="dashboard.php">
					<i class='bx bxs-home' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="datamas.php">
					<i class='bx bxs-face' ></i>
					<span class="text">Data Mahasiswa</span>
				</a>
			</li>
			<li class="active">
				<a href="#">
					<i class='bx bxs-cloud-upload' ></i>
					<span class="text">Upload Nilai</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="teks/css" href="admind.css">
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Upload Nilai</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="#">Unggah Nilai</a>
						</li>
						<!--<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home </a>
						</li>-->
					</ul>
				</div>
				
			</div>

			


			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	</div>
      <div class="col-md-10 p-5 pt-2">
        <h3><i class=" fas fa-user-graduate mr-2"></i> Nilai Mahasiswa</h3><hr>
      
        <table class="table table-striped table bordered">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NIM</th>
              <th scope="col">NAMA</th>
              <th scope="col">Mata Kuliah</th>
              <th scope="col">Kelas</th>
              <th scope="col">Nilai Absensi</th>
              <th scope="col">Nilai Tugas Harian</th>
              <th scope="col">Nilai UTS</th>
              <th scope="col">Nilai UAS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>001</td>
              <td>Ahmad Syafi' Azka.A</td>
              <td>PBO</td>
              <td>1D TPRL</td>
              <TD> 90</TD>
              <TD> 80</TD>
              <TD> 85</TD>
              <TD> 90</TD>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>002</td>
              <td>Putra Questy</td>
              <td>PBO</td>
              <td>1D</td>
              <td>85</td>
              <TD>80</TD>
              <TD>85</TD>
              <TD>80</TD>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>003</td>
              <td>Juniardanu </td>
              <td>PBO</td>
              <td>1D</td>
              <td>90</td>
              <TD>80</TD>
              <TD>95</TD>
              <TD>80</TD>
            </tr>
          </tbody>
        </table>
      
      
      </div>
    </div>

	<script src="script.js"></script>
</body>
</html>