<?php

//panggil koneksi database
include "konek.php";

//uji jika tombol simpan di klik
if(isset($_POST['bsimpan'])) {

    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, diuji)
                                    VALUES ('$_POST[tnim]',
                                            '$_POST[tnama]',
                                            '$_POST[talamat]',
                                            '$_POST[tdiuji]') ");
    //jika simpan sukses
    if($simpan){
        echo "<script>
                alert('Simpan data Sukses!');
                document.location='diuji.php';
            </script>";
    } else {
        echo "<script>
                alert('Simpan data Gagal!');
                document.location='diuji.php';
            </script>";
    }
}

//uji jika tombol ubah di klik
if(isset($_POST['bubah'])) {

    //persiapan ubah data 
    $ubah = mysqli_query($koneksi, "UPDATE tmhs SET
                                                    nim = '$_POST[tnim]',
                                                    nama = '$_POST[tnama]',
                                                    alamat = '$_POST[talamat]',
                                                    diuji = '$_POST[tdiuji]'
                                                WHERE id_mhs ='$_POST[id_mhs]'
                                                    ");
    //jika ubah sukses
    if($ubah){
        echo "<script>
                alert('Ubah data Sukses!');
                document.location='diuji.php';
            </script>";
    } else {
        echo "<script>
                alert('Ubah data Gagal!');
                document.location='diuji.php';
            </script>";
    }
}

//uji jika tombol hapus di klik
if(isset($_POST['bhapus'])) {

    //persiapan hapus data 
    $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = '$_POST[id_mhs]'");
    
    
    //jika hapus sukses
    if($hapus){
        echo "<script>
                alert('Hapus data Sukses!');
                document.location='uji.php';
            </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='uji.php';
            </script>";
    }
}