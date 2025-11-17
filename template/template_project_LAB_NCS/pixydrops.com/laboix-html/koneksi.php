<?php
// file: koneksi.php (disempurnakan dengan pdo untuk postgresql)

/*
// todo: buka semua komentar di bawah ini jika database postgresql anda sudah siap.
// ----- kode koneksi pdo postgresql (yang benar sesuai proposal) -----

$host = "localhost";
$port = "5432"; // port default postgresql
$db   = "lab_ncs_db"; // sesuaikan nama database anda
$user = "postgres"; // username default postgresql
$pass = "password_anda"; // ganti dengan password postgres anda

// pdo connection string (dsn)
$dsn = "pgsql:host=$host;port=$port;dbname=$db";

try {
    // 1. membuat koneksi pdo
    $pdo = new pdo($dsn, $user, $pass, [pdo::attr_errmode => pdo::errmode_exception]);

    // set timezone (opsional tapi disarankan)
    date_default_timezone_set('asia/jakarta');

} catch (pdoexception $e) {
    // 2. jika koneksi gagal, tampilkan pesan error
    die("koneksi database gagal: " . $e->getmessage());
}

// variabel $pdo sekarang siap digunakan di file lain

*/

// ----- kode lama anda (mysqli) saya matikan karena tidak sesuai -----
/*
$host = "localhost";
$user = "root";
$pass = "";
$db   = "lab_ncs_db"; // Nama database Anda

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

date_default_timezone_set('Asia/Jakarta');
*/
?>