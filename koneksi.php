<?php

    //Koneksi Database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "tmhs";

    //buat koneksi
    $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

?>