<?php
    $host ="localhost";
    $username = "root";
    $password = "";
    $database  = "database_sekolah";

    $koneksi = mysqli_connect($host, $username, $password,$database);

    mysqli_select_db($koneksi, $database);

