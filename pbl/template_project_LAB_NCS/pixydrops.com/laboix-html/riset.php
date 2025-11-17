<?php
// file: riset.php
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Akademik & Riset</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Riset</span></li>
        </ul>
    </div>
</section>
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/determined.png" alt="Roadmap" class="sec-title__img">Roadmap Penelitian</h6>
                    <h3 class="sec-title__title">Peta Jalan Riset Lab NCS</h3>
                </div>
                <p class="text-center mb-5">Admin akan mengunggah file PDF Roadmap Penelitian di sini. Anda dapat menampilkannya menggunakan tag `<embed>` atau link unduhan.</p>
                
                <div class="text-center">
                    <a href="path/to/roadmap.pdf" class="laboix-btn" download>Unduh Roadmap (PDF)</a>
                </div>
            </div>
            
            <div class="col-lg-12 mt-120">
                 <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/science.png" alt="Penelitian" class="sec-title__img">Penelitian</h6>
                    <h3 class="sec-title__title">Publikasi & Proyek</h3>
                </div>
                <p class="text-center">[KONTEN DARI ADMIN] Daftar penelitian, publikasi, dan proyek akan ditampilkan di sini. Ini bisa berupa daftar (list) atau galeri seperti di halaman Beranda.</p>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>