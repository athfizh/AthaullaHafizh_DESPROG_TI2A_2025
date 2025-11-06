<?php include 'views/header.php'; ?>
<h2>Statistik Gaji per Departemen</h2>
<p style="margin-bottom: 2rem; color: #666;">
    Menampilkan rata-rata, gaji tertinggi, dan gaji terendah untuk setiap departemen.
</p>

<table class="data-table">
    <thead>
        <tr>
            <th>Departemen</th>
            <th>Gaji Rata-rata</th>
            <th>Gaji Tertinggi</th>
            <th>Gaji Terendah</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $stats->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><strong><?php echo htmlspecialchars($row['department']); ?></strong></td>
                <td><strong>Rp <?php echo number_format($row['avg_salary'], 0, ',', '.'); ?></strong></td>
                <td style="color: #27ae60;">Rp <?php echo number_format($row['max_salary'], 0, ',', '.'); ?></td>
                <td style="color: #c0392b;">Rp <?php echo number_format($row['min_salary'], 0, ',', '.'); ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include 'views/footer.php'; ?>