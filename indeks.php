<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Bootsrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <script src="js/bootstrap.bundle.min.js" ></script>

<!--font awesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <title>Poliwangi Dosen</title>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD - BS5
          </a>
        </div>
      </nav>

      <!--jUDUL -->
      <div class="container">
        <h1 class="mt-4">Nilai Mahasiswa 1D</h1>
        <figure>
          <blockquote class="blockquote">
            <p>Berisi data base</p>
          </blockquote>
          <figcaption class="blockquote-footer">
            CRUD <cite title="Source Title">Create Read Update delete</cite>
          </figcaption>
        </figure>
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
               <td>Ahmad Syafi' Azka Azkiya</td>
               <td>PBO</td>
               <td>100</td>
               <td>100</td>
               <td>100</td>
               <td>100</td>
               <td>A</td>
               <td>
                <a href="kelola2.php" button type="button" class="btn btn-success btn-sam">
                    Ubah
                </button>
                <a href="kelola.php" button type="button" class="btn btn-danger btn-sam">
                    Hapus
                </a>
               </td>
                </tr>
            </body>
        </table>
    </div> 
      </div>  
</body>
</html>