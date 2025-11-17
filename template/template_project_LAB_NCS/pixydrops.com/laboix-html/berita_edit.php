<?php
// file: berita_edit.php (UPDATE)
include 'admin_header.php'; 

// Ambil ID dari URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: berita_manage.php");
    exit();
}
$id_berita = (int)$_GET['id'];

// Logika untuk UPDATE data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_berita_update = (int)$_POST['id_berita'];
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul_berita']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi_berita']);
    $gambar_lama = $_POST['gambar_lama'];
    
    $gambar_berita = $gambar_lama; // Default gunakan gambar lama

    // Cek apakah ada gambar baru diupload
    if (isset($_FILES['gambar_berita']) && $_FILES['gambar_berita']['error'] == 0) {
        $upload_dir = 'uploads/';
        $gambar_nama = time() . '_' . basename($_FILES['gambar_berita']['name']);
        $target_file = $upload_dir . $gambar_nama;

        if (move_uploaded_file($_FILES['gambar_berita']['tmp_name'], $target_file)) {
            $gambar_berita = $gambar_nama; // Gunakan gambar baru
            // Hapus gambar lama jika ada
            if (!empty($gambar_lama) && file_exists($upload_dir . $gambar_lama)) {
                unlink($upload_dir . $gambar_lama);
            }
        }
    }

    // Update data ke database
    $sql = "UPDATE berita SET judul_berita = ?, isi_berita = ?, gambar_berita = ? WHERE id_berita = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $judul, $isi, $gambar_berita, $id_berita_update);
    
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Berita berhasil diperbarui!";
        header("Location: berita_manage.php");
        exit();
    } else {
        $_SESSION['message'] = "Error: Gagal memperbarui data.";
    }
}

// Ambil data lama untuk ditampilkan di form
$sql_select = "SELECT * FROM berita WHERE id_berita = ?";
$stmt_select = mysqli_prepare($koneksi, $sql_select);
mysqli_stmt_bind_param($stmt_select, "i", $id_berita);
mysqli_stmt_execute($stmt_select);
$result = mysqli_stmt_get_result($stmt_select);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}
?>

<div class="admin-content">
    <h2>Edit Berita</h2>
    
    <?php 
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-danger">'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }
    ?>

    <form action="berita_edit.php?id=<?php echo $id_berita; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_berita" value="<?php echo $data['id_berita']; ?>">
        <input type="hidden" name="gambar_lama" value="<?php echo $data['gambar_berita']; ?>">

        <div class="mb-3">
            <label for="judul_berita" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="<?php echo htmlspecialchars($data['judul_berita']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="isi_berita" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="10" required><?php echo htmlspecialchars($data['isi_berita']); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar_berita" class="form-label">Ganti Gambar Berita (Opsional)</label><br>
            <img src="uploads/<?php echo $data['gambar_berita']; ?>" alt="" width="150" class="mb-2">
            <input type="file" class="form-control" id="gambar_berita" name="gambar_berita" accept="image/*">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>
        
        <button type="submit" class="laboix-btn">Update Berita</button>
        <a href="berita_manage.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?php
include 'admin_footer.php'; 
?>