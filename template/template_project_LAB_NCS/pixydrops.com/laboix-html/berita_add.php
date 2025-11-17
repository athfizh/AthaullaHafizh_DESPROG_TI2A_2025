<?php
// file: berita_add.php (CREATE)
include 'admin_header.php'; 

// Logika untuk memproses form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($koneksi, $_POST['judul_berita']);
    $isi = mysqli_real_escape_string($koneksi, $_POST['isi_berita']);
    $id_admin = $_SESSION['admin_id']; // Ambil dari session
    $tgl_berita = date('Y-m-d H:i:s'); // Tanggal hari ini
    
    // Logika Upload Gambar
    $gambar_berita = "";
    if (isset($_FILES['gambar_berita']) && $_FILES['gambar_berita']['error'] == 0) {
        $upload_dir = 'uploads/';
        $gambar_nama = time() . '_' . basename($_FILES['gambar_berita']['name']);
        $target_file = $upload_dir . $gambar_nama;

        if (move_uploaded_file($_FILES['gambar_berita']['tmp_name'], $target_file)) {
            $gambar_berita = $gambar_nama;
        } else {
            $_SESSION['message'] = "Error: Gagal mengupload gambar.";
            // handle error
        }
    }

    if (!empty($gambar_berita)) {
        // Gunakan Prepared Statements untuk keamanan
        $sql = "INSERT INTO berita (judul_berita, isi_berita, gambar_berita, tgl_berita, id_admin) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_bind_param($stmt, "ssssi", $judul, $isi, $gambar_berita, $tgl_berita, $id_admin);
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "Berita baru berhasil ditambahkan!";
            header("Location: berita_manage.php");
            exit();
        } else {
            $_SESSION['message'] = "Error: Gagal menyimpan data.";
        }
    }
}
?>

<div class="admin-content">
    <h2>Tambah Berita Baru</h2>
    
    <?php 
    // Tampilkan pesan error jika ada
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-danger">'.$_SESSION['message'].'</div>';
        unset($_SESSION['message']);
    }
    ?>

    <form action="berita_add.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul_berita" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" name="judul_berita" required>
        </div>
        <div class="mb-3">
            <label for="isi_berita" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="10" required></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar_berita" class="form-label">Gambar Berita</label>
            <input type="file" class="form-control" id="gambar_berita" name="gambar_berita" accept="image/*" required>
        </div>
        
        <button type="submit" class="laboix-btn">Simpan Berita</button>
        <a href="berita_manage.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

<?php
include 'admin_footer.php'; 
?>