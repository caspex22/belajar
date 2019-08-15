<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "tokobuku";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal" . mysqli_connect_errno();
}