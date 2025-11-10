<?php
include "koneksi.php";

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    if ($aksi == "tambah") {
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        $query = "insert into anggota (nama, jenis_kelamin, alamat, no_telp) 
                  values ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";
        
        if (pg_query($koneksi, $query)) {
            header("location: index.php");
            exit();
        } else {
            echo "gagal menambahkan data: " . pg_last_error($koneksi);
        }

    } elseif ($aksi == "ubah") {
        if (isset($_POST["id"])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $no_telp = $_POST['no_telp'];

            $query = "update anggota set nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' where id='$id'";
            
            if (pg_query($koneksi, $query)) {
                header("location: index.php");
                exit();
            } else {
                echo "gagal mengubah data: " . pg_last_error($koneksi);
            }
        } else {
            echo "id tidak valid.";
        }
    } elseif ($aksi == 'hapus') {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "delete from anggota where id = '$id'";
            
            if (pg_query($koneksi, $query)) {
                header("location: index.php");
                exit();
            } else {
                echo "gagal menghapus data: " . pg_last_error($koneksi);
            }
        } else {
            echo "id tidak valid.";
        }
    }
}

pg_close($koneksi);
?>