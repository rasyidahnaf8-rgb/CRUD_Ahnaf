<?php

$host   = "localhost";
$user   = "root";       
$pass   = "";          
$dbname = "db_siswa";

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil<br>";
}
?>
