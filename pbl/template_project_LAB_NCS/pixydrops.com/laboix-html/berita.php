<?php
// file: berita.php (Struktur Card Sudah Diperbaiki)
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
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
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="assets/images/blog/blog-1-1.png" alt="Analisis Kerentanan Terbaru pada IoT Campus">
                            <a href="blog-details-right.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">02</span>NOV</div>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-card__author">
                            <a href="blog-details-right.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="assets/images/blog/blog-author-1-1.png" alt="laboix author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Muhammad Ibnu</h6>
                                    <span class="blog-card__author__deg">Asisten Lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="blog-details-right.php">Analisis Kerentanan Terbaru pada IoT Campus</a></h3>
                        <div class="blog-card__content__btn">
                            <a href="blog-details-right.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="blog-card__image">
                         <div class="blog-card__image__item">
                            <img src="assets/images/blog/blog-1-2.png" alt="Tim Lab NCS Raih Juara 1">
                            <a href="blog-details-right.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">12</span>JUN</div>
                    </div>
                    <div class="blog-card__content">
                         <div class="blog-card__author">
                            <a href="blog-details-right.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="assets/images/blog/blog-author-1-2.png" alt="laboix author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Putri Cantika</h6>
                                    <span class="blog-card__author__deg">Asisten Lab</span>
                                </div>
                            </a>
                        </div>
                         <h3 class="blog-card__title"><a href="blog-details-right.php">Tim Lab NCS Raih Juara 1 Kompetisi Capture The Flag</a></h3>
                         <div class="blog-card__content__btn">
                            <a href="blog-details-right.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                 <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="assets/images/blog/blog-1-3.png" alt="Publikasi Jurnal">
                            <a href="blog-details-right.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">03</span>AUG</div>
                    </div>
                    <div class="blog-card__content">
                        <div class="blog-card__author">
                            <a href="blog-details-right.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="assets/images/blog/blog-author-1-3.png" alt="laboix author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Athaulla Hafizh</h6>
                                    <span class="blog-card__author__deg">Asisten Lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="blog-details-right.php">Publikasi Jurnal: Implementasi Zero Trust di Lingkungan Kampus</a></h3>
                         <div class="blog-card__content__btn">
                            <a href="blog-details-right.php" class="blog-card__content__btn__link">Baca Selengkapnya<i class="icon-arrow"></i></a>
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