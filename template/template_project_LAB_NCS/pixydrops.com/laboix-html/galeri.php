<?php
// file: galeri.php (Statis - Galeri & Agenda)
// include 'koneksi.php'; // Koneksi ditutup
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Galeri & Agenda</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Aktivitas</span></li>
        </ul>
    </div>
</section>

<!-- Content Galeri Start (Statis) -->
<section class="gallery-page pt-120 pb-90" id="galeri">
    <div class="container">
        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="assets/images/shapes/science.png" alt="Galeri" class="sec-title__img">Galeri</h6>
            <h3 class="sec-title__title">Dokumentasi Kegiatan Lab NCS</h3>
        </div>
        <div class="row gutter-y-30">
            <!-- Galeri Placeholder 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-1.jpg" alt="Galeri 1" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-1.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">Praktikum Jaringan</h4>
                        <p class="gallery-card__text">Sesi praktikum implementasi router</p>
                    </div>
                </div>
            </div>
            <!-- Galeri Placeholder 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-2.jpg" alt="Galeri 2" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-2.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">Workshop Keamanan Siber</h4>
                        <p class="gallery-card__text">Kegiatan workshop dengan praktisi</p>
                    </div>
                </div>
            </div>
            <!-- Galeri Placeholder 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-3.jpg" alt="Galeri 3" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-3.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">Lomba CTF Internal</h4>
                        <p class="gallery-card__text">Persiapan lomba tingkat nasional</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan 3 lagi agar rapi -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-4.jpg" alt="Galeri 4" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-4.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">Riset IoT Security</h4>
                        <p class="gallery-card__text">Pengujian perangkat sensor</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-5.jpg" alt="Galeri 5" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-5.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">Diskusi Tim Riset</h4>
                        <p class="gallery-card__text">Pembahasan proyek</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-6.jpg" alt="Galeri 6" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-6.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">Pengabdian Masyarakat</h4>
                        <p class="gallery-card__text">Edukasi keamanan digital</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content Galeri End -->

<!-- Content Agenda Start (Statis) -->
<section class="blog-one pt-0 pb-120" id="agenda" style="background-color: #f4f7f6;">
    <div class="container">
        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="assets/images/shapes/determined.png" alt="Agenda" class="sec-title__img">Agenda</h6>
            <h3 class="sec-title__title">Agenda Kegiatan Lab NCS</h3>
        </div>
        <div class="row gutter-y-30 justify-content-center">
            <!-- Agenda Placeholder 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="assets/images/blog/blog-1-1.png" alt="Workshop Ethical Hacking">
                        </div>
                        <div class="blog-card__date"> 
                            <span class="blog-card__date__day">10</span>DES
                        </div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <h3 class="blog-card__title"><a href="#">Workshop Ethical Hacking</a></h3>
                        <p class="blog-card__text" style="padding-top: 15px;">Workshop dasar ethical hacking untuk mahasiswa JTI. Terbuka untuk umum.</p>
                    </div>
                </div>
            </div>
            <!-- Agenda Placeholder 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="assets/images/blog/blog-1-2.png" alt="Guest Lecture: 5G Security">
                        </div>
                        <div class="blog-card__date"> 
                            <span class="blog-card__date__day">15</span>DES
                        </div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <h3 class="blog-card__title"><a href="#">Guest Lecture: 5G Security</a></h3>
                        <p class="blog-card__text" style="padding-top: 15px;">Kuliah tamu oleh praktisi industri mengenai tantangan keamanan di jaringan 5G.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content Agenda End -->

<?php
include 'footer.php';
?>