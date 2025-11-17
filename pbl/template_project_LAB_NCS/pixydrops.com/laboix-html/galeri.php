<?php
// file: galeri.php
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Galeri & Agenda</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Galeri</span></li>
        </ul>
    </div>
</section>
<section class="gallery-page pt-120 pb-120">
    <div class="container">
        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="assets/images/shapes/science.png" alt="Galeri" class="sec-title__img">Galeri</h6>
            <h3 class="sec-title__title">Dokumentasi Kegiatan Lab NCS</h3>
        </div>
        <div class="row gutter-y-30">
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-1.jpg" alt="Galeri 1" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-1.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">[Judul Kegiatan]</h4>
                        <p class="gallery-card__text">[Keterangan singkat kegiatan dari Admin]</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-2.jpg" alt="Galeri 2" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-2.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">[Judul Kegiatan]</h4>
                        <p class="gallery-card__text">[Keterangan singkat kegiatan dari Admin]</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                    <img src="assets/images/gallery/gallery-3.jpg" alt="Galeri 3" class="gallery-card__image">
                    <div class="gallery-card__hover">
                        <a href="assets/images/gallery/gallery-3.jpg" class="gallery-card__popup-btn video-popup">
                            <i class="icon-search"></i>
                        </a>
                        <h4 class="gallery-card__title">[Judul Kegiatan]</h4>
                        <p class="gallery-card__text">[Keterangan singkat kegiatan dari Admin]</p>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>
<?php
include 'footer.php';
?>