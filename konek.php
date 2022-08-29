<?php

    //koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dbcrud_diuji";

    //buat koneksi
    $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

?>