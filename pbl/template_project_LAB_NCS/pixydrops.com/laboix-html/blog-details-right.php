<?php
// file: blog-details-right.php (Baru, Sesuai Tema)
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
            <li><span>Detail Artikel</span></li>
        </ul>
    </div>
</section>

<section class="blog-one blog-one--page">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-card__two">
                        <div class="blog-card__two__image">
                            <img src="assets/images/blog/blog-1-1.png" alt="Analisis Kerentanan Terbaru pada IoT Campus">
                            <div class="blog-card__two__date"> <span class="blog-card__two__date__day">02</span>NOV</div>
                        </div>
                        <div class="blog-card__two__content">
                            <ul class="list-unstyled blog-card__two__meta">
                                <li class="blog-card__two__meta__item"><a href="#"><i class="icon-user"></i>Oleh: Muhammad Ibnu</a></li>
                                <li class="blog-card__two__meta__item"><a href="#comments"><i class="icon-chatting2"></i> 2 Komentar</a></li>
                            </ul>
                            <h3 class="blog-card__two__title blog-card__two__title--two"><a href="blog-details-right.php">Analisis Kerentanan Terbaru pada IoT Campus</a></h3>
                            <p class="blog-card__two__text blog-card__two__text--two">Seiring dengan meningkatnya implementasi perangkat Internet of Things (IoT) di lingkungan Politeknik Negeri Malang (Polinema), Laboratorium Network & Cyber Security (NCS) JTI telah melakukan riset mendalam mengenai potensi kerentanan yang ada. Penelitian ini bertujuan untuk memetakan celah keamanan dan memberikan rekomendasi penguatan sistem.</p>
                            <p class="blog-card__two__text blog-card__two__text--two">Tim peneliti menemukan beberapa kerentanan kritis, termasuk penggunaan password default pada perangkat, kurangnya segmentasi jaringan (network segmentation) antara perangkat IoT dan jaringan akademik utama, serta protokol komunikasi yang tidak terenkripsi. "Banyak perangkat IoT yang dipasang dengan konfigurasi 'out-of-the-box' tanpa hardening yang memadai," ujar salah satu peneliti.</p>
                            
                            <img src="assets/images/blog/blog-1-2.png" alt="Ilustrasi riset" class="mt-4 mb-4">
                            
                            <p class="blog-card__two__text blog-card__two__text--two">Rekomendasi utama dari penelitian ini mencakup implementasi kebijakan password yang ketat, pembuatan VLAN terisolasi khusus untuk perangkat IoT, dan penggunaan sertifikat SSL/TLS untuk mengamankan lalu lintas data. Hasil riset ini diharapkan dapat menjadi panduan bagi pengelola IT kampus dalam membangun ekosistem smart campus yang aman dan tangguh.</p>
                        </div>
                    </div>

                    <div class="blog-details__meta">
                        <div class="blog-details__tags wow fadeInUp" data-wow-delay='300ms'>
                            <h4 class="blog-details__tags__title">Tags: </h4>
                            <div class="sidebar__tags">
                                <a href="#" class="laboix-btn">Riset</a>
                                <a href="#" class="laboix-btn">IoT</a>
                                <a href="#" class="laboix-btn">Keamanan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comments-one" id="comments">
                    <h3 class="comments-one__title wow fadeInUp" data-wow-delay='300ms'>2 Komentar</h3>
                    <ul class="list-unstyled comments-one__list">
                        <li class="comments-one__card wow fadeInUp" data-wow-delay='300ms'>
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-1.png" alt="Guest">
                            </div>
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">Pengunjung 1</h3>
                                <p class="comments-one__card__text">Informasi yang sangat bermanfaat! Semoga bisa segera diterapkan di seluruh area kampus.</p>
                                <div class="comments-one__card__btn">
                                    <a href="#" class="laboix-btn comments-one__card__reply">Balas</a>
                                </div>
                            </div>
                        </li>
                        <li class="comments-one__card wow fadeInUp" data-wow-delay='300ms'>
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-2.png" alt="Guest 2">
                            </div>
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">Mahasiswa JTI</h3>
                                <p class="comments-one__card__text">Apakah hasil lengkap penelitiannya bisa diunduh di halaman arsip?</p>
                                <div class="comments-one__card__btn">
                                    <a href="#" class="laboix-btn comments-one__card__reply">Balas</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="comments-form">
                    <h3 class="comments-form__title wow fadeInUp" data-wow-delay='300ms'>Tinggalkan Komentar (Opsional)</h3>
                    <form class="comments-form__form contact-form-validated form-one wow fadeInUp" data-wow-delay='300ms'>
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Nama Anda">
                            </div>
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email (Tidak dipublikasi)">
                            </div>
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Tulis komentar..."></textarea>
                            </div>
                            <div class="form-one__control">
                                <button type="submit" class="laboix-btn laboix-btn--secondary">Kirim Komentar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="sidebar">
                    <aside class="widget-area">
                        <div class="sidebar__single--search wow fadeInUp" data-wow-delay='300ms'>
                            <form action="#" class="sidebar__search">
                                <button type="submit" aria-label="search submit">
                                    <span><i class="icon-search"></i></span>
                                </button>
                                <input type="text" placeholder="Cari di sini...">
                            </form>
                        </div>

                        <div class="sidebar__single wow fadeInUp" data-wow-delay='300ms'>
                            <h4 class="sidebar__title">Berita Terbaru</h4>
                            <ul class="sidebar__posts list-unstyled">
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-1.png" alt="laboix">
                                    </div>
                                    <div class="sidebar__posts__content">
                                        <p class="sidebar__posts__meta"><a href="#"><i class="icon-clock-1"></i>02 Nov 2025</a></p>
                                        <h4 class="sidebar__posts__title"><a href="blog-details-right.php">Analisis Kerentanan Terbaru pada IoT Campus</a></h4>
                                    </div>
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-2.jpg" alt="laboix">
                                    </div>
                                    <div class="sidebar__posts__content">
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#"><i class="icon-clock-1"></i>12 Jun 2025</a></p>
                                            <h4 class="sidebar__posts__title"><a href="blog-details-right.php">Tim Lab NCS Raih Juara 1 Kompetisi CTF</a></h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="sidebar__posts__item">
                                    <div class="sidebar__posts__image">
                                        <img src="assets/images/blog/lp-1-3.png" alt="laboix">
                                    </div>
                                    <div class="sidebar__posts__content">
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#"><i class="icon-clock-1"></i>03 Aug 2025</a></p>
                                            <h4 class="sidebar__posts__title"><a href="blog-details-right.php">Publikasi Jurnal: Implementasi Zero Trust</a></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar__single wow fadeInUp" data-wow-delay='300ms'>
                            <h4 class="sidebar__title">Kategori</h4>
                            <ul class="sidebar__categories list-unstyled">
                                <li class="sidebar__categories__item"><a href="#">Keamanan Jaringan</a></li>
                                <li class="sidebar__categories__item"><a href="#">Forensik Digital</a></li>
                                <li class="sidebar__categories__item"><a href="#">Riset IoT</a></li>
                                <li class="sidebar__categories__item"><a href="#">Prestasi</a></li>
                                <li class="sidebar__categories__item"><a href="#">Pengabdian</a></li>
                            </ul>
                        </div>

                        <div class="sidebar__single wow fadeInUp" data-wow-delay='300ms'>
                            <h4 class="sidebar__title">Tags</h4>
                            <div class="sidebar__tags">
                                <a class="sidebar__tag__item" href="#">Riset</a>
                                <a class="sidebar__tag__item" href="#">CTF</a>
                                <a class="sidebar__tag__item" href="#">IoT</a>
                                <a class="sidebar__tag__item" href="#">Polinema</a>
                                <a class="sidebar__tag__item" href="#">JTI</a>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>