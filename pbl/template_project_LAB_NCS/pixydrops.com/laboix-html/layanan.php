<?php
// file: layanan.php (SUDAH DIPERBAIKI)
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Layanan & Fasilitas</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Layanan</span></li>
        </ul>
    </div>
</section>
<section class="service-page service-page--one pt-120 pb-120">
    <div class="service-page__bg" style="background-image: url(assets/images/shapes/service-shape-1-1.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/customer-review.png" alt="Layanan & Fasilitas" class="sec-title__img">Layanan & Fasilitas</h6>
                    <h3 class="sec-title__title">Sarana & Prasarana Pendukung Riset</h3>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">
            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a href="#">Infrastruktur <br> Jaringan</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="assets/images/service/service-1-1.png" alt="Infrastruktur Jaringan">
                            </div>
                            </div>
                        <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Lab kami dilengkapi dengan berbagai perangkat keras jaringan (router, switch, firewall) untuk simulasi dan pengujian skenario keamanan jaringan yang kompleks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a href="#">Uji Keamanan <br> Aplikasi</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="assets/images/service/service-1-2.png" alt="Uji Keamanan Aplikasi">
                            </div>
                            </div>
                         <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Menyediakan lingkungan 'sandbox' yang terisolasi untuk melakukan penetration testing dan analisis kerentanan pada aplikasi web dan mobile.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='800ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a href="#">Analisis dan <br> Forensik</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="assets/images/service/service-1-3.png" alt="Analisis dan Forensik">
                            </div>
                            </div>
                         <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Dilengkapi dengan workstation dan perangkat lunak khusus (misal: FTK Imager, Autopsy) untuk praktik forensik digital dan analisis malware.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a href="#">Layanan <br> Konsultatif</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="assets/images/service/service-1-4.png" alt="Konsultasi">
                            </div>
                            </div>
                         <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Memberikan layanan konsultasi dan bimbingan teknis terkait keamanan siber untuk proyek mahasiswa, dosen, maupun unit lain di Polinema.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>