<?php

//panggil koneksi database
include "koneksipenkp.php";

//uji jika tombol simpan di klik
if (isset($_POST['bSimpan'])) {

    //persiapan simpan data baru
    // $simpan = mysqli_query($koneksi, "INSERT INTO tb_pendkp (id, tempt_kp, alamt_kp, tanggl_mulai, tanggl_selesai, propsl, anggta_kelompok, dosen, verified)
    // VALUES ('$_POST[id]',
    //         '$_POST[ttempt_kp]',
    //         '$_POST[talamt_kp]',
    //         '$_POST[ttanggl_mulai]',
    //         '$_POST[ttanggl_selesai]',
    //         '$_POST[tpropsl]',
    //         '$_POST[tanggta_kelompok]',
    //         '$_POST[tdosen]') ");

    // //jika simpan sukses
    // if($simpan){
    //     echo "<script>
    //             alert('Simpan data Sukses!');
    //             document.location='pendkp.php';
    //          </script>";
    // }else{
    //     echo "<script>
    //             alert('Simpan data Gagal!');
    //             document.location='pendkp.php';
    //          </script>";
    // }
}

//uji jika tombol verivy di klik
if (isset($_POST['bSetujui'])) {

    //persiapan Setujui data
    $Ubah = mysqli_query($koneksi, "UPDATE tb_pendkp SET
                                                        
                                                        verified = '$_POST[tverified]'
                                                    where verified = '$_POST[verified]'
                                                        ");


    //jika verivy sukses
    if($Ubah){
        echo "<script>
                alert('Ubah data Sukses!');
                document.location='pendkp.php';
             </script>";
    }else{
        echo "<script>
                alert('Ubah data Gagal!');
                document.location='pendkp.php';
             </script>";
    }
}

//uji jika tombol Tolak di klik
if (isset($_POST['bTolak'])) {

    //persiapan tolak data
    $Tolak = mysqli_query($koneksi, "UPDATE tb_pendkp SET
                                                        id = '$_POST[tid]',
                                                        tempt_kp = '$_POST[ttempt_kp]',
                                                        alamt_kp = '$_POST[talamt_kp]',
                                                        tanggl_mulai = '$_POST[ttanggl_mulai]',
                                                        tanggl_selesai = '$_POST[ttanggl_selesai]',
                                                        propsl = '$_POST[tpropsl]',
                                                        anggta_kelompok = '$_POST[tanggta_kelompok]',
                                                        dosen = '$_POST[tdosen]'
                                                    where id = '$_POST[id]'
                                                        ");


    //jika Tolak ditekan
    if($Tolak){
        echo "<script>
                alert('Tolak data Sukses!');
                document.location='pendkp.php';
             </script>";
    }else{
        echo "<script>
                alert('Tolak data Gagal!');
                document.location='pendkp.php';
             </script>";
    }
}

?>