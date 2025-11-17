<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    if (!empty($_GET['jabatan'])) {
        // --- LOGIKA TAMBAH JABATAN (DARI PRAKTIKUM 4) ---
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $keterangan = anti_injection($koneksi, $_POST['keterangan']);
        
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Baru Ditambahkan.");
        } else {
            pesan('danger', "Menambahkan Jabatan Gagal Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");

    } elseif (!empty($_GET['anggota'])) {
        // --- LOGIKA TAMBAH ANGGOTA (BARU DARI PRAKTIKUM 5) ---
        $username = anti_injection($koneksi, $_POST['username']);
        $password = anti_injection($koneksi, $_POST['password']);
        $level = anti_injection($koneksi, $_POST['level']);
        $jabatan = anti_injection($koneksi, $_POST['jabatan']);
        $nama = anti_injection($koneksi, $_POST['nama']);
        $jenis_kelamin = anti_injection($koneksi, $_POST['jenis_kelamin']);
        $alamat = anti_injection($koneksi, $_POST['alamat']);
        $no_telp = anti_injection($koneksi, $_POST['no_telp']);

        // Enkripsi password dengan salt
        $salt = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;
        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

        // 1. Insert ke tabel user
        $query_user = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";
        
        if (mysqli_query($koneksi, $query_user)) {
            $last_id = mysqli_insert_id($koneksi); // Ambil ID user yang baru dibuat
            
            // 2. Insert ke tabel anggota
            $query_anggota = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) 
                              VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan')";
            
            if (mysqli_query($koneksi, $query_anggota)) {
                pesan('success', "Anggota Baru Ditambahkan.");
            } else {
                pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Menambahkan Anggota Gagal Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
?>