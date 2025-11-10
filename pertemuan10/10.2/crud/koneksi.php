<?php
$koneksi = pg_connect("host=localhost port=5432 dbname=prakwebdb user=postgres password=kepanjen45");
if (!$koneksi) {
    die("koneksi database gagal: " . pg_last_error());
}
?>