<?php
// file: 404.php
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">404 Error</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>404 Error</span></li>
        </ul>
    </div>
</section>
<section class="error-404">
    <div class="container">
        <div class="error-404__thumb wow fadeInUp" data-wow-duration="1500ms">
            <div class="error-404__thumb__item error-404__thumb__item--main">
                <img src="assets/images/shapes/error-m-1-1.png" alt="404 error">
            </div>
            <div class="error-404__thumb__item error-404__thumb__item--two">
                <img src="assets/images/shapes/error-1-1.png" alt="shape">
            </div>
        </div>
        <h3 class="error-404__sub-title">Oops! Halaman Tidak Ditemukan</h3>
        <p class="error-404__text">Maaf, halaman yang Anda cari tidak ada atau telah dipindahkan.</p>
        <div class="error-404__btns">
            <a href="index.php" class="laboix-btn">Kembali ke Beranda</a>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>