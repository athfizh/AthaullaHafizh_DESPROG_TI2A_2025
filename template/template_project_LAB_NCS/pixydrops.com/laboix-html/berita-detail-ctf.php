<?php
// file: berita-detail-ctf.php (Komentar Dihapus Total)
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
            <li><span>Tim Lab NCS Juara...</span></li>
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
                            <img src="assets/images/blog/blog-1-2.png" alt="Tim Lab NCS Raih Juara 1">
                            <div class="blog-card__two__date"> <span class="blog-card__two__date__day">12</span>JUN</div>
                        </div>
                        <div class="blog-card__two__content">
                            <ul class="list-unstyled blog-card__two__meta">
                                <li class="blog-card__two__meta__item"><a href="#"><i class="icon-user"></i>Oleh: Putri Cantika</a></li>
                                </ul>
                            <h3 class="blog-card__two__title blog-card__two__title--two"><a href="#">Tim Lab NCS Raih Juara 1 Kompetisi Capture The Flag</a></h3>
                            <p class="blog-card__two__text blog-card__two__text--two">[KONTEN STATIS PLACEHOLDER] Tim dari Laboratorium NCS berhasil meraih pencapaian gemilang dengan menyabet Juara 1 dalam kompetisi Capture The Flag (CTF) tingkat nasional yang diselenggarakan oleh Universitas X. Kompetisi ini menguji kemampuan peserta dalam bidang keamanan siber, forensik digital, dan kriptografi.</p>
                            <p class="blog-card__two__text blog-card__two__text--two">Tim yang terdiri dari tiga mahasiswa JTI ini berhasil menyelesaikan serangkaian tantangan kompleks dan mengungguli puluhan tim lain dari berbagai universitas di Indonesia. "Kemenangan ini adalah bukti dari kualitas pembelajaran dan riset yang kami lakukan di Lab NCS," ujar Putri Cantika, salah satu anggota tim.</p>
                        </div>
                    </div>
                    
                    <div class="blog-details__meta">
                        <div class="blog-details__tags wow fadeInUp" data-wow-delay='300ms'>
                            <h4 class="blog-details__tags__title">Tags: </h4>
                            <div class="sidebar__tags">
                                <a href="#" class="laboix-btn">Prestasi</a>
                                <a href="#" class="laboix-btn">CTF</a>
                                <a href="#" class="laboix-btn">Kompetisi</a>
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
                                        <img src="assets/images/blog/blog-1-3.png" alt="Publikasi Jurnal">
                                        <a href="berita-detail-jurnal.php" class="blog-card__image__link"></a>
                                    </div>
                                    <div class="blog-card__date"> <span class="blog-card__date__day">03</span>AUG</div>
                                </div>
                                <div class="blog-card__content" style="border: none !important;">
                                    <div class="blog-card__author">
                                        <a href="berita-detail-jurnal.php" class="blog-card__author__item">
                                            <div class="blog-card__author__thumb">
                                                <img src="assets/images/blog/blog-author-1-3.png" alt="author">
                                            </div>
                                            <div class="blog-card__author__content">
                                                <h6 class="blog-card__author__name">Athaulla Hafizh</h6>
                                                <span class="blog-card__author__deg">Asisten Lab</span>
                                            </div>
                                        </a>
                                    </div>
                                    <h3 class="blog-card__title"><a href="berita-detail-jurnal.php">Publikasi Jurnal: Implementasi Zero Trust</a></h3>
                                    <div class="blog-card__content__btn">
                                        <a href="berita-detail-jurnal.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
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