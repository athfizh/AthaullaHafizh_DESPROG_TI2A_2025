<?php
// file: arsip.php
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
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
            <h6 class="sec-title__tagline"><img src="assets/images/shapes/science.png" alt="Arsip" class="sec-title__img">Arsip</h6>
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
                            <th scope="col">Kategori</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>[Konten Admin] Laporan Penelitian Zero Trust 2024</td>
                            <td>Penelitian</td>
                            <td>4.2 MB</td>
                            <td><a href="path/to/file1.pdf" class="laboix-btn laboix-btn--sm" download>Unduh</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>[Konten Admin] Materi Workshop IoT Security 2025</td>
                            <td>Pengabdian</td>
                            <td>3.1 MB</td>
                            <td><a href="path/to/file2.pdf" class="laboix-btn laboix-btn--sm" download>Unduh</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>[Konten Admin] SOP Penggunaan Lab NCS</td>
                            <td>Arsip</td>
                            <td>1.5 MB</td>
                            <td><a href="path/to/file3.pdf" class="laboix-btn laboix-btn--sm" download>Unduh</a></td>
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