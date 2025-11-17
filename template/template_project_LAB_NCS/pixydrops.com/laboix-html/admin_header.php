<?php
// file: admin_header.php (disempurnakan)

session_start();

// todo: 1. matikan 'koneksi.php' agar bisa dibuka di laragon
// include 'koneksi.php'; // panggil koneksi database

// 2. definisikan base_url untuk admin
// (pastikan file admin anda ada di folder 'admin/', jika di root, hapus '/admin')
// asumsi file ini ada di root folder:
$base_url = "http://" . $_server['http_host'] . rtrim(dirname($_server['php_self']), '/\\') . "/";

// 3. matikan sementara cek login agar bisa dilihat di laragon
/* if (!isset($_session['admin_username'])) {
    header("location: " . $base_url . "login.php");
    exit();
}
$nama_admin = $_session['admin_nama'];
*/

// 4. buat variabel dummy agar tidak error
$nama_admin = "admin (dummy)"; 

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard admin - lab ncs</title>
    
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/laboix.css">
    
    <style>
        /* css tambahan untuk admin (sudah bagus) */
        .admin-wrapper { padding: 40px; }
        .admin-header {
            background: #233545;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #00c497;
        }
        .admin-header .logo a { font-size: 20px; color: white; font-weight: 700; text-decoration: none; }
        .admin-header .user-info { font-size: 14px; }
        .admin-header .user-info a { color: #ff4d4d; text-decoration: none; margin-left: 15px; }
        .admin-nav {
            background: #f4f7f6;
            padding: 10px 30px;
            border-bottom: 1px solid #ddd;
        }
        .admin-nav a {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            color: #233545;
            font-weight: 600;
        }
        .admin-nav a:hover, .admin-nav a.active {
            color: #00c497;
        }
        .admin-content {
            padding: 30px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-top: 30px;
        }
        .admin-content h2 {
            font-weight: 700;
            color: #233545;
            border-bottom: 2px solid #f4f7f6;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        .stats-card {
            background: #f4f7f6;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }
        .stats-card h3 { font-size: 36px; font-weight: 700; color: #00c497; }
        .stats-card p { font-size: 16px; color: #233545; margin-bottom: 0; }
    </style>
</head>
<body>
<div class="admin-wrapper">
    <header class="admin-header">
        <div class="logo">
            <a href="<?php echo $base_url; ?>admin.php">admin panel lab ncs</a>
        </div>
        <div class="user-info">
            selamat datang, <strong><?php echo htmlspecialchars($nama_admin); ?></strong>
            <a href="<?php echo $base_url; ?>logout.php">(logout)</a>
        </div>
    </header>
    <nav class="admin-nav">
        <?php $current_page = basename($_server['php_self']); ?>
        <a href="<?php echo $base_url; ?>admin.php" class="<?php echo ($current_page == 'admin.php') ? 'active' : ''; ?>">dashboard</a>
        <a href="<?php echo $base_url; ?>berita_manage.php" class="<?php echo (str_starts_with($current_page, 'berita_')) ? 'active' : ''; ?>">kelola berita</a>
        <a href="<?php echo $base_url; ?>layanan_manage.php" class="<?php echo (str_starts_with($current_page, 'layanan_')) ? 'active' : ''; ?>">kelola sarana</a>
        <a href="<?php echo $base_url; ?>galeri_manage.php" class="<?php echo (str_starts_with($current_page, 'galeri_')) ? 'active' : ''; ?>">kelola galeri</a>
        <a href="<?php echo $base_url; ?>arsip_manage.php" class="<?php echo (str_starts_with($current_page, 'arsip_')) ? 'active' : ''; ?>">kelola arsip</a>
        <a href="<?php echo $base_url; ?>pengelola_manage.php" class="<?php echo (str_starts_with($current_page, 'pengelola_')) ? 'active' : ''; ?>">kelola pengelola</a>
    </nav>