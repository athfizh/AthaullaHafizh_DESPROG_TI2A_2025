<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan'])) {
        // --- LOGIKA EDIT JABATAN (DARI PRAKTIKUM 4) ---
        $id = anti_injection($koneksi, $_POST['id']);
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $keterangan = anti_injection($koneksi, $_POST['keterangan']);
        
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Gagal Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");

    } elseif (!empty($_GET['anggota'])) {
        // --- LOGIKA EDIT ANGGOTA (BARU DARI PRAKTIKUM 5) ---
        $user_id = anti_injection($koneksi, $_POST['id']);
        $nama = anti_injection($koneksi, $_POST['nama']);
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = anti_injection($koneksi, $_POST['jenis_kelamin']);
        $alamat = anti_injection($koneksi, $_POST['alamat']);
        $no_telp = anti_injection($koneksi, $_POST['no_telp']);
        $username = anti_injection($koneksi, $_POST['username']);

        // 1. Update tabel anggota
        $query_anggota = "UPDATE anggota SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', 
                          no_telp = '$no_telp', jabatan_id = '$jabatan' WHERE user_id = '$user_id'";
        
        if (mysqli_query($koneksi, $query_anggota)) {
            // 2. Cek apakah password diisi
            if (!empty($_POST['password'])) {
                // Jika password diisi, hash ulang
                $password = $_POST['password'];
                $salt = bin2hex(random_bytes(16));
                $combined_password = $salt . $password;
                $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);
                
                // Update user DENGAN password baru
                $query_user = "UPDATE user SET username = '$username', password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else {
                // Jika password kosong, hanya update username
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Gagal Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
?>