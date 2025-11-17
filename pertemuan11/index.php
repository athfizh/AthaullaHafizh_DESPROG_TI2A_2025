<?php
if (session_status() === PHP_SESSION_NONE)
    session_start();

if (!empty($_SESSION['level'])) {
    require 'config/koneksi.php';
    require 'fungsi/pesan_kilat.php';

    include 'admin/template/header.php';
    if (!empty($_GET['page'])) {
        // Ini adalah router utama yang memuat modul
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        // Jika tidak ada 'page' di URL, muat halaman home
        include 'admin/template/home.php';
    }
    include 'admin/template/footer.php';
} else {
    // Jika belum login, tendang ke halaman login
    header("Location: login.php");
}
?>