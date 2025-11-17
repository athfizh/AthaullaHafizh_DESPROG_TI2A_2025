<?php
// file: arsip.php (Rombak Ulang: KBBI & Kapital)
include 'header.php';
include "navbar.php";
// todo: include 'koneksi.php'; (jika nanti sudah siap)
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Arsip Dokumen</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Arsip</span></li>
        </ul>
    </div>
</section>

<section class="pt-120 pb-120">
    <div class="container">
        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/science.png" alt="Arsip" class="sec-title__img">Arsip</h6>
            <h3 class="sec-title__title">Dokumen Penelitian & Pengabdian</h3>
            <p class="mt-3">Berikut adalah arsip dokumen (SOP, hasil penelitian, materi pengabdian) yang dapat diunduh oleh publik.</p>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Dokumen</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php
                        // todo: Blok dinamis PDO PostgreSQL untuk 'tbl_penelitian' & 'tbl_pengabdian'
                        /*
                        try {
                            global $pdo;
                            
                            $query_penelitian = "
                                SELECT 'Penelitian' AS kategori, judul_penelitian AS judul, deskripsi_singkat AS deskripsi,
                                       tahun_penelitian AS tahun, file_dokumen_pdf AS file_pdf, link_publikasi AS link
                                FROM tbl_penelitian WHERE file_dokumen_pdf IS NOT NULL AND file_dokumen_pdf != ''
                            ";
                            $query_pengabdian = "
                                SELECT 'Pengabdian' AS kategori, judul_kegiatan AS judul, deskripsi_kegiatan AS deskripsi,
                                       tahun_kegiatan AS tahun, file_dokumen_pdf AS file_pdf, NULL AS link
                                FROM tbl_pengabdian WHERE file_dokumen_pdf IS NOT NULL AND file_dokumen_pdf != ''
                            ";
                            // (Tambahkan query untuk 'Dokumen Lab' jika ada tabelnya, misal tbl_dokumen)
                            
                            $stmt = $pdo->query("($query_penelitian) UNION ALL ($query_pengabdian) ORDER BY tahun DESC, judul ASC");
                            $data_arsip = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            
                            if (empty($data_arsip)) {
                                echo "<tr><td colspan='6' class='text-center'>Belum ada arsip yang dipublikasikan.</td></tr>";
                            } else {
                                $no = 1;
                                foreach ($data_arsip as $arsip) {
                                    $kategori_class = ($arsip['kategori'] == 'Penelitian') ? 'primary' : 'success';
                        ?>

                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo htmlspecialchars($arsip['judul']); ?></td>
                            <td><?php echo htmlspecialchars($arsip['deskripsi']); ?></td>
                            <td><span class="badge bg-<?php echo $kategori_class; ?>"><?php echo htmlspecialchars($arsip['kategori']); ?></span></td>
                            <td><?php echo htmlspecialchars($arsip['tahun']); ?></td>
                            <td>
                                <a href="<?php echo $base_url . 'uploads/arsip/' . htmlspecialchars($arsip['file_pdf']); ?>" class="laboix-btn laboix-btn--sm" download>Unduh</a>
                                <?php if (!empty($arsip['link'])): ?>
                                    <a href="<?php echo htmlspecialchars($arsip['link']); ?>" class="laboix-btn laboix-btn--sm" target="_blank" style="background-color: #f0ad4e;">Link</a>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <?php
                                } // end foreach
                            } // end else
                        } catch (PDOException $e) {
                            echo "<tr><td colspan='6' class='text-center alert alert-danger'>Gagal memuat arsip.</td></tr>";
                        }
                        */
                        ?>
                        
                        <tr>
                            <th scope="row">1</th>
                            <td>Laporan Penelitian Zero Trust 2024</td>
                            <td>Hasil penelitian implementasi Zero Trust...</td>
                            <td><span class="badge bg-primary">Penelitian</span></td>
                            <td>2024</td>
                            <td><a href="#" class="laboix-btn laboix-btn--sm" download>Unduh</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Materi Workshop IoT Security 2025</td>
                            <td>Materi workshop untuk pengabdian...</td>
                            <td><span class="badge bg-success">Pengabdian</span></td>
                            <td>2025</td>
                            <td><a href="#" class="laboix-btn laboix-btn--sm" download>Unduh</a></td>
                        </tr>
                         <tr>
                            <th scope="row">3</th>
                            <td>SOP Penggunaan Lab NCS</td>
                            <td>Standard Operating Procedure...</td>
                            <td><span class="badge bg-info">Dokumen Lab</span></td>
                            <td>2025</td>
                            <td><a href="#" class="laboix-btn laboix-btn--sm" download>Unduh</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>