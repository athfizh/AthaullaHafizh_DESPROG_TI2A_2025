<?php include 'views/header.php'; ?>
<h2>Statistik Masa Kerja Karyawan</h2>
<p style="margin-bottom: 2rem; color: #666;">
    Menampilkan jumlah karyawan berdasarkan kelompok masa kerja (tenure).
</p>

<table class="data-table">
    <thead>
        <tr>
            <th>Level Pengalaman (Masa Kerja)</th>
            <th>Jumlah Karyawan</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $stats->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><strong><?php echo htmlspecialchars($row['experience_level']); ?></strong></td>
                <td><?php echo $row['total_employees']; ?> orang</td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include 'views/footer.php'; ?>