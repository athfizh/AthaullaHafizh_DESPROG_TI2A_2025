<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan'])) {
        // --- LOGIKA HAPUS JABATAN (DARI PRAKTIKUM 4) ---
        $id = anti_injection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");

    } elseif (!empty($_GET['anggota'])) {
        // --- LOGIKA HAPUS ANGGOTA (BARU DARI PRAKTIKUM 5) ---
        $id = anti_injection($koneksi, $_GET['id']); // Ini adalah user_id
        
        // Hapus data anggota terlebih dahulu (untuk mematuhi foreign key)
        $query_anggota = "DELETE FROM anggota WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query_anggota)) {
            // Jika berhasil, hapus data user
            $query_user = "DELETE FROM user WHERE id = '$id'";
            if (mysqli_query($koneksi, $query_user)) {
                 pesan('success', "Anggota Telah Terhapus.");
            } else {
                 pesan('warning', "Data Anggota Terhapus Tetapi Data Login Gagal Terhapus Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
?>