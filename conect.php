<?php
$user = "root";
$pass = "";
$server = "localhost";
$db = "rental";
$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
    echo "Koneksi Gagal";
}
