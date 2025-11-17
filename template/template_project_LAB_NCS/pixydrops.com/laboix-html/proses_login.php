<?php
// file: proses_login.php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];

    // Ambil data admin dari database berdasarkan username
    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        // Verifikasi password (asumsi di-hash)
        if (password_verify($password, $data['password'])) {
            // Password benar, simpan session
            $_SESSION['admin_id'] = $data['id_admin'];
            $_SESSION['admin_nama'] = $data['nama_admin'];
            $_SESSION['admin_username'] = $data['username'];
            
            // Redirect ke halaman dashboard admin (Anda harus membuat file admin.php)
            header("Location: admin.php"); 
            exit();
        } else {
            // Password salah
            $_SESSION['login_error'] = "Username atau password salah.";
            header("Location: login.php");
            exit();
        }
    } else {
        // Username tidak ditemukan
        $_SESSION['login_error'] = "Username atau password salah.";
        header("Location: login.php");
        exit();
    }
    
    /* PENTING: 
    Jika password Anda di database TIDAK di-hash (hanya teks biasa), 
    ganti blok 'if (password_verify...)' di atas dengan ini:

    if ($password == $data['password']) {
        // Password benar, simpan session
        $_SESSION['admin_id'] = $data['id_admin'];
        $_SESSION['admin_nama'] = $data['nama_admin'];
        $_SESSION['admin_username'] = $data['username'];
        
        header("Location: admin.php");
        exit();
    } else {
        // Password salah
        $_SESSION['login_error'] = "Username atau password salah.";
        header("Location: login.php");
        exit();
    }
    */
    
} else {
    // Jika diakses langsung, redirect ke login
    header("Location: login.php");
    exit();
}
?>