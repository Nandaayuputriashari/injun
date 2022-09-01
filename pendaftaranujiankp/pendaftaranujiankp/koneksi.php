<?php
//koneksi database
$server = "localhost";
$user = "root";
$password = "Bakuryu12";
$database = "db_tugaspklutfi";

//buat koneksi
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));


//jika tombol daftar di klik
if(isset($_POST['bsimpan'])){

    //pengujian apakah data akan diedit atau disimpan baru
    if(isset($_GET['hal']) == "edit"){
        //data akan di edit
        $edit = mysqli_query($koneksi,"UPDATE pendaftaran SET
                                              nim = '$_POST[tnim]',
                                              nama = '$_POST[tnama]',
                                              kelas = '$_POST[tkelas]',
                                              laporan = '$_POST[tlaporan]',
                                              dosen = '$_POST[tdosen]',
                                              jadwal = '$_POST[ttanggal]'
                                        WHERE id = '$_GET[id]'
                                        ");
         //uji jika edit data sukses
    if($edit){
        echo "<script>
        alert('berhasil edit');
        document.location='pendaftaranujiankp.php';
        </script>";
    }else{
        echo "<script>
        alert('gagal edit');
        document.location='pendaftaranujiankp.php';
        </script>";
    }

    }else{
        //data akan disimpan baru
        $simpan = mysqli_query($koneksi," INSERT INTO pendaftaran (nim, nama, kelas, laporan, dosen, jadwal)
                                                        VALUE ( '$_POST[tnim]',
                                                                '$_POST[tnama]',
                                                                '$_POST[tkelas]',
                                                                '$_POST[tlaporan]',
                                                                '$_POST[tdosen]',
                                                                '$_POST[ttanggal]'   )   
                                                ");
//uji jika simpan data sukses
if($simpan){
echo "<script>
alert('berhasil mendaftar');
document.location='pendaftaranujiankp.php';
</script>";
}else{
echo "<script>
alert('gagal mendaftar');
document.location='pendaftaranujiankp.php';
</script>";
}
    }

    
}
//deklarasi variabel untuk menampung data yang akan diedit
$vnim="";
$vnama="";
$vkelas="";
$vlaporan="";
$vdosen="";
$vjadwalujian="";



//pengujian jika tombol edit/hapus di klik
if(isset($_GET['hal'])) {

    //pengujian jika edit data
    if($_GET['hal'] == "edit"){

        //tampilkan data yang akan di edit
        $tampil = mysqli_query($koneksi, "SELECT *FROM pendaftaran WHERE id ='$_GET[id]'");
        $data = mysqli_fetch_array($tampil);
        if($data){
            //jika data ditemukan maka data ditampung ke dalam variabel
            $vnim = $data['nim'];
            $vnama = $data['nama'];
            $vkelas = $data['kelas'];
            $vlaporan = $data['laporan'];
            $vdosen= $data['dosen'];
            $vjadwalujian= $data['jadwal'];



        }
    }else if ($_GET['hal'] == "hapus"){
        //persiapan hapus data
        $hapus = mysqli_query($koneksi, "DELETE FROM pendaftaran WHERE id = '$_GET[id]'");
        //uji jika hapus data sukses
    if($hapus){
        echo "<script>
        alert('berhasil hapus');
        document.location='pendaftaranujiankp.php';
        </script>";
    }else{
        echo "<script>
        alert('gagal hapus');
        document.location='pendaftaranujiankp.php';
        </script>";
    }
    }
}

?>