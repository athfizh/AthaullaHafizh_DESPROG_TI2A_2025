<?php
// file: index.php (disempurnakan)

// todo: uncomment baris di bawah ini jika file koneksi.php sudah siap
// include 'koneksi.php'; 

include 'header.php'; // header sudah menyertakan $base_url
include "navbar.php"; // (pastikan file ini ada)

if (file_exists('slider.php')) {
    include 'slider.php'; // menampilkan slider
}
?>

<section class="about-two pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__left wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="500ms">
                    <div class="about-two__thumb">
                        <div class="about-two__thumb__item">
                            <img src="<?php echo $base_url; ?>assets/images/about/about-2-1.png" alt="profil lab ncs">
                        </div>
                        <div class="about-two__thumb__item about-two__thumb__item--two">
                            <img src="<?php echo $base_url; ?>assets/images/about/about-s-2-1.png" alt="lab ncs">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/science.png" alt="tentang kami" class="sec-title__img">profil lab</h6>
                            <h3 class="sec-title__title">lab. jaringan dan keamanan siber (ncs lab)</h3>
                        </div>
                        <p class="about-two__top__text">
                            [cite_start]laboratorium jaringan dan keamanan siber (ncs lab) merupakan salah satu laboratorium di jurusan teknologi informasi politeknik negeri malang yang berfokus pada bidang jaringan komputer dan keamanan siber. [cite: 51]
                        </p>
                    </div>
                    <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> visi: menjadi laboratorium unggul dan rujukan.</li>
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> misi: menyelenggarakan praktikum, penelitian, dan pengabdian.</li>
                    </ul>
                    <div class="about-two__link" style="margin-top: 20px;">
                        <a href="about.php" class="about-two__link__btn laboix-btn">pelajari lebih lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-page service-page--one pb-90 pt-120" style="background-color: #f4f7f6;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/customer-review.png" alt="bidang kajian" class="sec-title__img">akademik & riset</h6>
                    <h3 class="sec-title__title">ringkasan bidang kajian</h3>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-shield"></span></div>
                        <h3 class="service-card__title"><a>keamanan siber</a></h3>
                        <p class="service-card__text">fokus pada deteksi intrusi, forensik digital, dan kriptografi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-web-development-1"></span></div>
                        <h3 class="service-card__title"><a>jaringan komputer</a></h3>
                        <p class="service-card__text">mengkaji arsitektur, manajemen, dan optimasi jaringan skala besar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-iot-1"></span></div>
                        <h3 class="service-card__title"><a>internet of things (iot)</a></h3>
                        <p class="service-card__text">riset pada arsitektur, protokol, dan keamanan perangkat iot.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4 mt-3">
            <div class="col-12 text-center">
                 <a href="riset.php" class="laboix-btn">lihat semua bidang kajian</a>
            </div>
        </div>
    </div>
</section>

<section class="service-page service-page--one pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/customer-review.png" alt="sarana" class="sec-title__img">sarana & prasarana</h6>
                    <h3 class="sec-title__title">fasilitas laboratorium</h3>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">
        
            <?php
            // todo: bagian ini akan di-looping dari database (tbl_sarana_prasarana)
            // contoh query: select * from tbl_sarana_prasarana order by nama_sarana asc limit 3
            
            /*
            $query_sarana = "select * from tbl_sarana_prasarana order by nama_sarana asc limit 3";
            // jalankan query...
            // $data_sarana = ... (hasil query)
            
            // contoh data statis (hapus jika sudah konek db)
            $data_sarana = [
                ['nama_sarana' => 'perangkat keras jaringan', 'foto_sarana' => 'assets/images/service/service-1-1.png', 'alt' => 'infrastruktur jaringan', 'delay' => '400ms'],
                ['nama_sarana' => 'perangkat riset iot & server', 'foto_sarana' => 'assets/images/service/service-1-4.png', 'alt' => 'perangkat riset', 'delay' => '600ms'],
                ['nama_sarana' => 'software keamanan siber', 'foto_sarana' => 'assets/images/service/service-1-3.png', 'alt' => 'software keamanan', 'delay' => '800ms']
            ];
            
            foreach ($data_sarana as $sarana) {
            ?>
            */
            ?>

            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a>perangkat keras jaringan</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url; ?>assets/images/service/service-1-1.png" alt="infrastruktur jaringan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a>perangkat riset iot & server</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url; ?>assets/images/service/service-1-4.png" alt="perangkat riset">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a>software keamanan siber</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url; ?>assets/images/service/service-1-3.png" alt="software keamanan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            /*
            // tutup kurung kurawal foreach
            } 
            */
            ?>

        </div>
         <div class="row pt-4 mt-3">
            <div class="col-12 text-center">
                 <a href="layanan.php" class="laboix-btn">lihat semua sarana</a>
            </div>
        </div>
    </div>
</section>

<section class="blog-one pb-120 pt-120" style="background-color: #f4f7f6;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/science.png" alt="berita" class="sec-title__img">berita</h6>
                    <h3 class="sec-title__title">aktivitas & berita terbaru</h3>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">

            <?php
            // todo: bagian ini akan di-looping dari database (tbl_berita)
            // contoh query: 
            // select b.*, a.nama_lengkap 
            // from tbl_berita b 
            // left join tbl_admin a on b.id_admin_penulis = a.id_admin
            // order by b.tanggal_publish desc 
            // limit 3
            
            /*
            $query_berita = "select ..."; // (query di atas)
            // jalankan query...
            // $data_berita = ... (hasil query)
            
            // contoh data statis (hapus jika sudah konek db)
            $data_berita = [
                [
                    'id_berita' => 1, 'slug_berita' => 'analisis-kerentanan-iot', 'judul_berita' => 'analisis kerentanan terbaru pada iot campus', 'gambar_berita' => 'assets/images/blog/blog-1-1.png', 'tanggal_publish' => '2025-11-02', 
                    'nama_penulis' => 'muhammad ibnu', 'foto_penulis' => 'assets/images/blog/blog-author-1-1.png', 'jabatan_penulis' => 'asisten lab', 'delay' => '400ms'
                ],
                [
                    'id_berita' => 2, 'slug_berita' => 'juara-ctf', 'judul_berita' => 'tim lab ncs raih juara 1 kompetisi capture the flag', 'gambar_berita' => 'assets/images/blog/blog-1-2.png', 'tanggal_publish' => '2025-06-12', 
                    'nama_penulis' => 'putri cantika', 'foto_penulis' => 'assets/images/blog/blog-author-1-2.png', 'jabatan_penulis' => 'asisten lab', 'delay' => '600ms'
                ],
                [
                    'id_berita' => 3, 'slug_berita' => 'jurnal-zero-trust', 'judul_berita' => 'publikasi jurnal: implementasi zero trust di lingkungan kampus', 'gambar_berita' => 'assets/images/blog/blog-1-3.png', 'tanggal_publish' => '2025-08-03', 
                    'nama_penulis' => 'athaulla hafizh', 'foto_penulis' => 'assets/images/blog/blog-author-1-3.png', 'jabatan_penulis' => 'asisten lab', 'delay' => '800ms'
                ]
            ];
            
            foreach ($data_berita as $berita) {
                // format tanggal
                $tanggal = date_create($berita['tanggal_publish']);
                $hari = date_format($tanggal, 'd');
                $bulan = date_format($tanggal, 'm'); // 'm' kecil untuk bulan angka
                
                // konversi bulan angka ke nama bulan (opsional, jika diperlukan)
                $nama_bulan_arr = ["", "jan", "feb", "mar", "apr", "mei", "jun", "jul", "agu", "sep", "okt", "nov", "des"];
                $bulan_teks = $nama_bulan_arr[(int)$bulan];

            ?>
            */
            ?>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-1.png" alt="analisis kerentanan terbaru pada iot campus">
                            <a href="berita-detail-iot.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">02</span>nov</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="berita-detail-iot.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="<?php echo $base_url; ?>assets/images/blog/blog-author-1-1.png" alt="laboix author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">muhammad ibnu</h6>
                                    <span class="blog-card__author__deg">asisten lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="berita-detail-iot.php">analisis kerentanan terbaru pada iot campus</a></h3>
                        <div class="blog-card__content__btn">
                            <a href="berita-detail-iot.php" class="blog-card__content__btn__link">baca selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-2.png" alt="tim lab ncs raih juara 1">
                            <a href="berita-detail-ctf.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">12</span>jun</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="berita-detail-ctf.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="<?php echo $base_url; ?>assets/images/blog/blog-author-1-2.png" alt="laboix author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">putri cantika</h6>
                                    <span class="blog-card__author__deg">asisten lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="berita-detail-ctf.php">tim lab ncs raih juara 1 kompetisi capture the flag</a></h3>
                        <div class="blog-card__content__btn">
                            <a href="berita-detail-ctf.php" class="blog-card__content__btn__link">baca selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='800ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-3.png" alt="publikasi jurnal">
                            <a href="berita-detail-jurnal.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">03</span>aug</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="berita-detail-jurnal.php" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img src="<?php echo $base_url; ?>assets/images/blog/blog-author-1-3.png" alt="laboix author">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">athaulla hafizh</h6>
                                    <span class="blog-card__author__deg">asisten lab</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="berita-detail-jurnal.php">publikasi jurnal: implementasi zero trust di lingkungan kampus</a></h3>
                        <div class="blog-card__content__btn">
                            <a href="berita-detail-jurnal.php" class="blog-card__content__btn__link">baca selengkapnya<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            /*
            // tutup kurung kurawal foreach
            } 
            */
            ?>
            
        </div>
         <div class="row pt-4 mt-3">
            <div class="col-12 text-center">
                 <a href="berita.php" class="laboix-btn">lihat semua berita</a>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>