<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();

// Memuat file-file yang dibutuhkan
include "config/koneksi.php";
include "fungsi/pesan_kilat.php";
include "fungsi/anti_injection.php";

// Mengamankan input dari form
$username = anti_injection($koneksi, $_POST['username']);
$password = anti_injection($koneksi, $_POST['password']);

$query = "SELECT username, level, salt, password as hashed_password FROM user WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    mysqli_close($koneksi);
    $salt = $row['salt'];
    $hashed_password = $row['hashed_password'];

    // Memeriksa apakah salt dan hash password ada
    if ($salt != null && $hashed_password !== null) {
        $combined_password = $salt . $password;
        
        // Memverifikasi password yang digabung dengan salt menggunakan password_verify
        if (password_verify($combined_password, $hashed_password)) {
            // Jika berhasil, buat session
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            header("Location: index.php");
        } else {
            // Jika password salah
            pesan('danger', "Login gagal. Password Anda Salah.");
            header("Location: login.php");
        }
    } else {
        // Jika salt atau hash password tidak ada di database
        pesan('warning', "Username tidak ditemukan atau data salt/password korup.");
        header("Location: login.php");
    }
} else {
    // Jika username tidak ditemukan
    pesan('warning', "Username tidak ditemukan.");
    header("Location: login.php");
}
?>