<?php
// file: about.php (disempurnakan)

// todo: uncomment baris di bawah ini jika file koneksi.php sudah siap
// include 'koneksi.php'; 
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">tentang kami</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">beranda</a></li>
            <li><span>profil lab ncs</span></li>
        </ul>
    </div>
</section>

<section class="lab-sejarah pt-120 pb-80" id="profil"> <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-two__left">
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
                    <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                        <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/sec-title-s-1.png" alt="profil lab" class="sec-title__img">profil lab</h6>
                        <h3 class="sec-title__title">laboratorium jaringan dan keamanan siber (ncs lab)</h3>
                    </div>
                    <p class="about-two__top__text">
                        laboratorium jaringan dan keamanan siber (ncs lab) merupakan salah satu laboratorium di jurusan teknologi informasi politeknik negeri malang yang berfokus pada bidang jaringan komputer dan keamanan siber.
                    </p>
                    <p class="about-two__top__text" style="margin-top: 15px;">
                        lab ncs memiliki fokus riset pada bidang keamanan siber, jaringan komputer, jaringan nirkabel, jaringan sensor nirkabel, komputasi awan dan jaringan, serta internet of things (iot). laboratorium ini dikepalai oleh eka larasati, s.st., m.t.
                    </p>
                    <div class="about-two__link" style="margin-top: 30px;">
                        <a href="#visi-misi" class="about-two__link__btn laboix-btn">lihat visi & misi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lab-visi-misi join-us-tow pt-120 pb-120" id="visi-misi" style="background-color: #f4f7f6;">
    <div class="join-us-tow__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/juin-us-bg.png);"></div>
    <div class="container">
        <div class="sec-title sec-title--two text-center wow fadeInUp mb-5" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/sec-title-s-2.png" alt="visi misi" class="sec-title__img">tujuan dan cita-cita</h6>
            <h3 class="sec-title__title">visi dan misi laboratorium ncs</h3>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="join-us-tow__item text-center">
                    <div class="join-us-tow__content">
                        <div class="join-us-tow__icon">
                            <i class="icon-trophy-1"></i> 
                        </div>
                        <h4 class="join-us-tow__title">visi</h4>
                        <p class="join-us-tow__text">"menjadi laboratorium unggul dan rujukan dalam bidang jaringan dan keamanan siber."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="join-us-tow__item text-center">
                    <div class="join-us-tow__content">
                        <div class="join-us-tow__icon">
                            <i class="icon-test-tubes-1"></i> 
                        </div>
                        <h4 class="join-us-tow__title">misi</h4>
                        <ul class="list-unstyled text-start" style="padding: 0 15px;">
                            <li style="color: #adb5bd; margin-bottom: 10px;"><i class="fas fa-check-circle text-primary me-2"></i> menyelenggarakan kegiatan praktikum yang berkualitas dan ter-update.</li>
                            <li style="color: #adb5bd; margin-bottom: 10px;"><i class="fas fa-check-circle text-primary me-2"></i> menyelenggarakan penelitian dan pengabdian masyarakat dalam bidang jaringan dan keamanan siber.</li>
                            <li style="color: #adb5bd; margin-bottom: 10px;"><i class="fas fa-check-circle text-primary me-2"></i> mendukung terciptanya ekosistem digital polinema yang aman dan handal.</li>
                            <li style="color: #adb5bd;"><i class="fas fa-check-circle text-primary me-2"></i> menghasilkan lulusan yang kompeten, berdaya saing, dan ber-etika.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lab-struktur-organisasi team-one pt-120 pb-120" id="struktur-organisasi">
    <div class="container">
        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/people.png" alt="struktur lab" class="sec-title__img">pengelola lab</h6>
            <h3 class="sec-title__title">struktur organisasi lab ncs</h3>
        </div>
        
        <div class="testimonials-one__carousel laboix-owl__carousel laboix-owl__carousel--with-shadow owl-carousel" data-owl-options='{
            "items": 1, "margin": 30, "loop": true, "smartSpeed": 700, "nav": true,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-arrow\"></span>"],
            "dots": false, "autoplay": true,
            "responsive": { "0": {"items": 1}, "768": {"items": 2}, "992": {"items": 3} }
        }'>
            
            <?php
            // todo: bagian ini akan di-looping dari database (tbl_pengelola)
            // contoh query: 
            // select * from tbl_pengelola order by urutan asc
            
            /*
            $query_pengelola = "select * from tbl_pengelola order by urutan asc";
            // jalankan query...
            // $data_pengelola = ... (hasil query)
            
            // contoh data statis (hapus jika sudah konek db)
            $data_pengelola = [
                ['nama_pengelola' => 'eka larasati, s.st., m.t.', 'jabatan' => 'ketua laboratorium', 'foto_pengelola' => 'assets/images/team/team-1-1.jpg'],
                ['nama_pengelola' => '[nama teknisi]', 'jabatan' => 'teknisi & administrasi lab', 'foto_pengelola' => 'assets/images/team/team-1-2.jpg'],
                ['nama_pengelola' => '[nama koordinator]', 'jabatan' => 'koordinator asisten', 'foto_pengelola' => 'assets/images/team/team-1-3.jpg'],
            ];
            
            foreach ($data_pengelola as $pengelola) {
            ?>
            */
            ?>

            <div class="item">
                <div class="team-card">
                    <div class="team-card__inner">
                        <div class="team-card__image">
                            <img src="<?php echo $base_url; ?>assets/images/team/team-1-1.jpg" alt="eka larasati, s.st., m.t.">
                        </div>
                        <div class="team-card__content">
                            <div class="team-card__content__inner">
                                <div class="team-card__content__item">
                                    <h3 class="team-card__content__title"><a>eka larasati, s.st., m.t.</a></h3>
                                    <h6 class="team-card__content__designation">ketua laboratorium</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item">
                 <div class="team-card">
                    <div class="team-card__inner">
                        <div class="team-card__image">
                             <img src="<?php echo $base_url; ?>assets/images/team/team-1-2.jpg" alt="teknisi lab">
                        </div>
                        <div class="team-card__content">
                            <div class="team-card__content__inner">
                                <div class="team-card__content__item">
                                    <h3 class="team-card__content__title"><a>[nama teknisi]</a></h3>
                                    <h6 class="team-card__content__designation">teknisi & administrasi lab</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item">
                 <div class="team-card">
                    <div class="team-card__inner">
                        <div class="team-card__image">
                             <img src="<?php echo $base_url; ?>assets/images/team/team-1-3.jpg" alt="koordinator asisten">
                        </div>
                        <div class="team-card__content">
                            <div class="team-card__content__inner">
                                <div class="team-card__content__item">
                                    <h3 class="team-card__content__title"><a>[nama koordinator]</a></h3>
                                    <h6 class="team-card__content__designation">koordinator asisten</h6>
                                </div>
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
    </div>
</section>

<?php
include 'footer.php';
?>