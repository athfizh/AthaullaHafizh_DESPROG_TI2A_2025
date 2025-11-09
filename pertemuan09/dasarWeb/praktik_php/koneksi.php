<?php
$host       = "localhost";
$user       = "root"; // Asumsi username default XAMPP/phpMyAdmin
$pass       = "";     // Asumsi password default XAMPP (kosong)
$db         = "prakwebdb";

$connect = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>