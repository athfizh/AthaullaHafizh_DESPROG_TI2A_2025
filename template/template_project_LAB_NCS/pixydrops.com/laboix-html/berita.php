<?php
// file: berita.php (Rombak Ulang: KBBI & Kapital)
include 'header.php'; // $base_url ada di sini
include "navbar.php";
// todo: include 'koneksi.php'; (jika nanti sudah siap)
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Berita & Artikel</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Berita</span></li>
        </ul>
    </div>
</section>

<section class="blog-one pt-120 pb-120">
    <div class="container">
        <div class="row gutter-y-30">

            <?php
            // todo: Blok dinamis PDO PostgreSQL untuk 'tbl_berita'
            /*
            try {
                global $pdo; 
                $query_berita = "
                    SELECT b.*, a.nama_lengkap AS nama_penulis
                    FROM tbl_berita b
                    LEFT JOIN tbl_admin a ON b.id_admin_penulis = a.id_admin
                    ORDER BY b.tanggal_publish DESC
                ";
                $stmt = $pdo->query($query_berita);
                $data_berita = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                if (empty($data_berita)) {
                    echo "<div class='col-12'><p class='text-center'>Belum ada berita yang dipublikasikan.</p></div>";
                } else {
                    $delay = 400;
                    foreach ($data_berita as $berita) {
                        $tanggal = date_create($berita['tanggal_publish']);
                        $hari = date_format($tanggal, 'd');
                        $bulan_teks = date_format($tanggal, 'M'); // M = Nov, Des, dll.
            ?>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='<?php echo $delay; ?>ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url . 'uploads/berita/' . htmlspecialchars($berita['gambar_berita']); ?>" alt="<?php echo htmlspecialchars($berita['judul_berita']); ?>">
                            <a href="<?php echo $base_url; ?>berita-detail.php?slug=<?php echo htmlspecialchars($berita['slug_berita']); ?>" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day"><?php echo $hari; ?></span><?php echo strtolower($bulan_teks); ?></div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="#" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="<?php echo $base_url; ?>assets/images/blog/blog-author-1-1.png" alt="Author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name"><?php echo htmlspecialchars($berita['nama_penulis']); ?></h6>
                                    <span class="blog-card__author__deg">Admin Lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="<?php echo $base_url; ?>berita-detail.php?slug=<?php echo htmlspecialchars($berita['slug_berita']); ?>"><?php echo htmlspecialchars($berita['judul_berita']); ?></a></h3>
                        <div class="blog-card__content__btn">
                            <a href="<?php echo $base_url; ?>berita-detail.php?slug=<?php echo htmlspecialchars($berita['slug_berita']); ?>" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
                        $delay += 200;
                    } // end foreach
                } // end else
            } catch (PDOException $e) {
                echo "<div class='col-12'><p class='text-center alert alert-danger'>Gagal memuat berita.</p></div>";
            }
            */
            ?>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-1.png" alt="Analisis Kerentanan Terbaru pada IoT Campus">
                            <a href="berita-detail-iot.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">02</span>NOV</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="berita-detail-iot.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="<?php echo $base_url; ?>assets/images/blog/blog-author-1-1.png" alt="Laboix Author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Muhammad Ibnu</h6>
                                    <span class="blog-card__author__deg">Asisten Lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="berita-detail-iot.php">Analisis Kerentanan Terbaru pada IoT Campus</a></h3>
                        <div class="blog-card__content__btn">
                            <a href="berita-detail-iot.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="blog-card__image">
                         <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-2.png" alt="Tim Lab NCS Raih Juara 1">
                            <a href="berita-detail-ctf.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">12</span>JUN</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                         <div class="blog-card__author">
                            <a href="berita-detail-ctf.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="<?php echo $base_url; ?>assets/images/blog/blog-author-1-2.png" alt="Laboix Author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Putri Cantika</h6>
                                    <span class="blog-card__author__deg">Asisten Lab</span>
                                </div>
                            </a>
                        </div>
                         <h3 class="blog-card__title"><a href="berita-detail-ctf.php">Tim Lab NCS Raih Juara 1 Kompetisi Capture The Flag</a></h3>
                         <div class="blog-card__content__btn">
                            <a href="berita-detail-ctf.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                 <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-3.png" alt="Publikasi Jurnal">
                            <a href="berita-detail-jurnal.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">03</span>AUG</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="berita-detail-jurnal.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="<?php echo $base_url; ?>assets/images/blog/blog-author-1-3.png" alt="Laboix Author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Athaulla Hafizh</h6>
                                    <span class="blog-card__author__deg">Asisten Lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="berita-detail-jurnal.php">Publikasi Jurnal: Implementasi Zero Trust di Lingkungan Kampus</a></h3>
                         <div class="blog-card__content__btn">
                            <a href="berita-detail-jurnal.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>