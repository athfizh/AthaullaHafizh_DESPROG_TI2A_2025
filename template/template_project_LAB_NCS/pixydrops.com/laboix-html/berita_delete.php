<?php
// file: berita_delete.php (DELETE)
include 'admin_header.php'; // Penting untuk keamanan dan koneksi

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: berita_manage.php");
    exit();
}

$id_berita = (int)$_GET['id'];

// 1. Dapatkan nama file gambar untuk dihapus dari folder
$sql_select = "SELECT gambar_berita FROM berita WHERE id_berita = ?";
$stmt_select = mysqli_prepare($koneksi, $sql_select);
mysqli_stmt_bind_param($stmt_select, "i", $id_berita);
mysqli_stmt_execute($stmt_select);
$result = mysqli_stmt_get_result($stmt_select);
$data = mysqli_fetch_assoc($result);

if ($data) {
    $gambar_lama = $data['gambar_berita'];
    
    // 2. Hapus data dari database
    $sql_delete = "DELETE FROM berita WHERE id_berita = ?";
    $stmt_delete = mysqli_prepare($koneksi, $sql_delete);
    mysqli_stmt_bind_param($stmt_delete, "i", $id_berita);
    
    if (mysqli_stmt_execute($stmt_delete)) {
        // 3. Hapus file gambar dari folder 'uploads'
        if (!empty($gambar_lama) && file_exists('uploads/' . $gambar_lama)) {
            unlink('uploads/' . $gambar_lama);
        }
        $_SESSION['message'] = "Berita berhasil dihapus!";
    } else {
        $_SESSION['message'] = "Error: Gagal menghapus data.";
    }
} else {
    $_SESSION['message'] = "Error: Data tidak ditemukan.";
}

header("Location: berita_manage.php");
exit();
?>