<?php
// file: admin.php (halaman dashboard - disempurnakan)
include 'admin_header.php'; // panggil header admin

// 1. matikan kueri mysqli_ dan set nilai default 0 agar laragon tidak error
$total_berita = 0;
$total_galeri = 0;
$total_sarana = 0;
$total_arsip = 0;

/*
// 2. kode mysqli_ anda yang lama (dimatikan)
$total_berita = mysqli_fetch_assoc(mysqli_query($koneksi, "select count(*) as total from berita"))['total'];
$total_galeri = mysqli_fetch_assoc(mysqli_query($koneksi, "select count(*) as total from galeri"))['total'];
$total_layanan = mysqli_fetch_assoc(mysqli_query($koneksi, "select count(*) as total from layanan"))['total'];
$total_arsip = mysqli_fetch_assoc(mysqli_query($koneksi, "select count(*) as total from arsip"))['total'];
*/

// todo: 3. ini adalah kode pdo postgresql yang benar (buka komentar jika db siap)
/*
try {
    global $pdo;
    
    // hitung total berita dari tbl_berita
    $stmt = $pdo->query("select count(*) from tbl_berita");
    $total_berita = $stmt->fetchcolumn();
    
    // hitung total galeri dari tbl_galeri
    $stmt = $pdo->query("select count(*) from tbl_galeri");
    $total_galeri = $stmt->fetchcolumn();
    
    // hitung total sarana dari tbl_sarana_prasarana (sesuai erd)
    $stmt = $pdo->query("select count(*) from tbl_sarana_prasarana");
    $total_sarana = $stmt->fetchcolumn();
    
    // hitung total arsip (gabungan penelitian & pengabdian, sesuai erd)
    $stmt_penelitian = $pdo->query("select count(*) from tbl_penelitian");
    $total_penelitian = $stmt_penelitian->fetchcolumn();
    $stmt_pengabdian = $pdo->query("select count(*) from tbl_pengabdian");
    $total_pengabdian = $stmt_pengabdian->fetchcolumn();
    $total_arsip = $total_penelitian + $total_pengabdian;

} catch (pdoexception $e) {
    echo "<div class='alert alert-danger'>gagal mengambil data statistik: " . $e->getmessage() . "</div>";
}
*/
?>

<div class="admin-content">
    <h2>dashboard</h2>
    <p>selamat datang di halaman admin website laboratorium network & cyber security. dari sini anda dapat mengelola konten website.</p>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="stats-card">
                <h3><?php echo $total_berita; ?></h3>
                <p>total berita</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <h3><?php echo $total_sarana; ?></h3>
                <p>total sarana</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <h3><?php echo $total_galeri; ?></h3>
                <p>total galeri</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card">
                <h3><?php echo $total_arsip; ?></h3>
                <p>total arsip</p>
            </div>
        </div>
    </div>

    <h3 class="mt-5">menu cepat</h3>
    <a href="<?php echo $base_url; ?>berita_manage.php" class="laboix-btn">kelola berita</a>
    </div>

<?php
include 'admin_footer.php'; // panggil footer admin
?>