<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="dashboard.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img class="bx bxs-smile" src="img/poliwangi.png" alt="" width="50px">
			<span class="text">Poliwangi</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
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
			<li>
				<a href="unggah.php">
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
		<nav>
			<i class='bx bx-menu' ></i>
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
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="form-group mb-4">
				<div class="form-row">
					<div class="col-lg-3">
					 <h3>Foto</h3>
					</div>
					<div class="col-lg-9">
						<h3 class="text-center">Selamat Datang di SIM Dosen Politeknik Negeri Banyuwangi</h3>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-4">NIP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 199203302019031012</div>
								<div class="col-md-8"></div>
							</div>
							<div class="form-row">
								<div class="col-md-4">Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Lutfi Hakim S.Pd.,M.T.</div>
								<div class="col-md-8"></div>
							</div>
							<div class="form-row">
								<div class="col-md-4">Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Jln. Kepodang no.11 RT 01 RW 02, Kalirejo, Kabat, Banyuwangi</div>
								<div class="col-md-8"></div>
							</div>
							<div class="form-row">
								<div class="col-md-4">No. Telp/HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 085330161514</div>
								<div class="col-md-8"></div>
							</div>
							<div class="form-row">
								<div class="col-md-4">Dosen Jurusan&nbsp;&nbsp;&nbsp;&nbsp;: Teknik Informatika</div>
								<div class="col-md-8"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>5</h3>
						<p>Mahasiswa KP</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-edit' ></i>
					<span class="text">
						<h3>4</h3>
						<p>Mahasiswa Sudah Ujian</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-select-multiple' ></i>
					<span class="text">
						<h3>6</h3>
						<p>Mahasiswa Lulus KP</p>
					</span>
				</li>
			</ul>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>