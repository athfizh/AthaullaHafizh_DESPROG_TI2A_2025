<?php
// file: berita-detail-jurnal.php (Komentar Dihapus Total)
// include 'koneksi.php'; // Koneksi ditutup
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Detail Berita</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="berita.php">Berita</a></li>
            <li><span>Publikasi Jurnal...</span></li>
        </ul>
    </div>
</section>

<section class="blog-one blog-one--page pt-120 pb-120">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card__two">
                        <div class="blog-card__two__image">
                            <img src="assets/images/blog/blog-1-3.png" alt="Publikasi Jurnal">
                            <div class="blog-card__two__date"> <span class="blog-card__two__date__day">03</span>AUG</div>
                        </div>
                        <div class="blog-card__two__content">
                            <ul class="list-unstyled blog-card__two__meta">
                                <li class="blog-card__two__meta__item"><a href="#"><i class="icon-user"></i>Oleh: Athaulla Hafizh</a></li>
                                </ul>
                            <h3 class="blog-card__two__title blog-card__two__title--two"><a href="#">Publikasi Jurnal: Implementasi Zero Trust di Lingkungan Kampus</a></h3>
                            <p class="blog-card__two__text blog-card__two__text--two">[KONTEN STATIS PLACEHOLDER] Dosen dan asisten Lab NCS berhasil mempublikasikan penelitian terbaru mereka di Jurnal Internasional XYZ. Penelitian ini berfokus pada model arsitektur keamanan 'Zero Trust' yang diadaptasi untuk lingkungan akademik yang dinamis seperti Polinema.</p>
                            <p class="blog-card__two__text blog-card__two__text--two">Studi ini mengusulkan kerangka kerja praktis untuk memverifikasi setiap permintaan akses, terlepas dari asalnya, sebagai langkah mitigasi terhadap ancaman internal dan eksternal. Publikasi ini diharapkan dapat menjadi referensi bagi institusi pendidikan lain yang ingin meningkatkan postur keamanan siber mereka.</p>
                        </div>
                    </div>
                    
                    <div class="blog-details__meta">
                        <div class="blog-details__tags wow fadeInUp" data-wow-delay='300ms'>
                            <h4 class="blog-details__tags__title">Tags: </h4>
                            <div class="sidebar__tags">
                                <a href="#" class="laboix-btn">Jurnal</a>
                                <a href="#" class="laboix-btn">Publikasi</a>
                                <a href="#" class="laboix-btn">Zero Trust</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-details__related-post pt-60">
                    <h3 class="blog-details__related-post__title">Berita Lainnya</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                                <div class="blog-card__image">
                                    <div class="blog-card__image__item">
                                        <img src="assets/images/blog/blog-1-1.png" alt="Analisis Kerentanan IoT">
                                        <a href="berita-detail-iot.php" class="blog-card__image__link"></a>
                                    </div>
                                    <div class="blog-card__date"> <span class="blog-card__date__day">02</span>NOV</div>
                                </div>
                                <div class="blog-card__content" style="border: none !important;">
                                    <div class="blog-card__author">
                                        <a href="berita-detail-iot.php" class="blog-card__author__item">
                                            <div class="blog-card__author__thumb">
                                                <img src="assets/images/blog/blog-author-1-1.png" alt="author">
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
                        <div class="col-md-6">
                            <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                                <div class="blog-card__image">
                                    <div class="blog-card__image__item">
                                        <img src="assets/images/blog/blog-1-2.png" alt="Tim Lab NCS Raih Juara 1">
                                        <a href="berita-detail-ctf.php" class="blog-card__image__link"></a>
                                    </div>
                                    <div class="blog-card__date"> <span class="blog-card__date__day">12</span>JUN</div>
                                </div>
                                <div class="blog-card__content" style="border: none !important;">
                                    <div class="blog-card__author">
                                        <a href="berita-detail-ctf.php" class="blog-card__author__item">
                                            <div class="blog-card__author__thumb">
                                                <img src="assets/images/blog/blog-author-1-2.png" alt="author">
                                            </div>
                                            <div class="blog-card__author__content">
                                                <h6 class="blog-card__author__name">Putri Cantika</h6>
                                                <span class="blog-card__author__deg">Asisten Lab</span>
                                            </div>
                                        </a>
                                    </div>
                                    <h3 class="blog-card__title"><a href="berita-detail-ctf.php">Tim Lab NCS Raih Juara 1 Kompetisi CTF</a></h3>
                                    <div class="blog-card__content__btn">
                                        <a href="berita-detail-ctf.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            
            <div class="col-lg-4">
                <div class="sidebar">
                   </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>