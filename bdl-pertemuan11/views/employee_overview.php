<?php include 'views/header.php'; ?>
<h2>Ringkasan Umum Karyawan</h2>
<p style="margin-bottom: 2rem; color: #666;">
    Menampilkan data agregat dari seluruh karyawan yang terdaftar.
</p>

<div class="dashboard-cards" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
    <div class="card">
        <h3>Total Karyawan</h3>
        <div class="number"><?php echo $overview['total_karyawan']; ?></div>
    </div>
    <div class="card">
        <h3>Total Gaji per Bulan</h3>
        <div class="number">Rp <?php echo number_format($overview['total_gaji_bulanan'], 0, ',', '.'); ?></div>
    </div>
    <div class="card">
        <h3>Rata-rata Masa Kerja</h3>
        <div class="number"><?php echo $overview['avg_masa_kerja']; ?> tahun</div>
    </div>
</div>

<?php include 'views/footer.php'; ?>