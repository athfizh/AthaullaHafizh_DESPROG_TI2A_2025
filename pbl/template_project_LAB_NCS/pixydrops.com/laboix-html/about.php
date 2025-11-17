<?php
// file: about.php (SUDAH DIPERBAIKI)
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Tentang Kami</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Profil Lab NCS</span></li>
        </ul>
    </div>
</section>

<section class="lab-sejarah pt-120 pb-80" id="sejarah">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-two__left">
                    <div class="about-two__thumb">
                        <div class="about-two__thumb__item">
                            <img src="assets/images/about/about-2-1.png" alt="lab history">
                        </div>
                        <div class="about-two__thumb__item about-two__thumb__item--two">
                            <img src="assets/images/about/about-s-2-1.png" alt="lab secondary image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                        <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Sejarah Lab" class="sec-title__img">Sejarah Lab</h6>
                        <h3 class="sec-title__title">Perjalanan Lab NCS dalam Keamanan Siber</h3>
                    </div>
                    <p class="about-two__top__text">[KONTEN DARI ADMIN]** Laboratorium Cyber Security (NCS) didirikan pada tahun *20XX* sebagai respons terhadap meningkatnya kebutuhan akan tenaga ahli dan penelitian mendalam di bidang keamanan siber, khususnya di Polinema.</p>
                    <p>Sejak awal, kami berkomitmen untuk menjadi garda terdepan dalam edukasi dan inovasi, dimulai dari fokus pada forensik digital dasar hingga pengembangan solusi keamanan berbasis kecerdasan buatan.</p>
                    
                    <div class="about-two__link">
                        <a href="#visi-misi" class="about-two__link__btn laboix-btn">Baca Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lab-visi-misi join-us-tow pt-120 pb-120" id="visi-misi">
    <div class="join-us-tow__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/backgrounds/juin-us-bg.png);"></div>
    <div class="container">
        <div class="sec-title sec-title--two text-center wow fadeInUp mb-5" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="Visi Misi" class="sec-title__img">Tujuan dan Cita-cita</h6>
            <h3 class="sec-title__title">Visi dan Misi Laboratorium NCS</h3>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="join-us-tow__item text-center">
                    <div class="join-us-tow__content">
                        <div class="join-us-tow__icon">
                            <i class="icon-trophy-1"></i> 
                        </div>
                        <h4 class="join-us-tow__title">Visi</h4>
                        <p class="join-us-tow__text">[KONTEN DARI ADMIN]** Menjadi pusat unggulan riset dan edukasi keamanan siber terkemuka di tingkat nasional dan diakui secara internasional pada tahun 20XX.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="join-us-tow__item text-center">
                    <div class="join-us-tow__content">
                        <div class="join-us-tow__icon">
                            <i class="icon-test-tubes-1"></i> 
                        </div>
                        <h4 class="join-us-tow__title">Misi</h4>
                        <ul class="list-unstyled text-start" style="padding: 0 15px;">
                            <li style="color: #adb5bd; margin-bottom: 10px;"><i class="fas fa-check-circle text-primary me-2"></i> Melaksanakan penelitian inovatif di bidang Cyber Security.</li>
                            <li style="color: #adb5bd; margin-bottom: 10px;"><i class="fas fa-check-circle text-primary me-2"></i> Mendukung kegiatan akademik dan pelatihan praktis bagi mahasiswa.</li>
                            <li style="color: #adb5bd;"><i class="fas fa-check-circle text-primary me-2"></i> Berkontribusi pada masyarakat dan industri melalui layanan keamanan.</li>
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
            <h6 class="sec-title__tagline"><img src="assets/images/shapes/people.png" alt="Struktur Lab" class="sec-title__img">Pengelola Lab</h6>
            <h3 class="sec-title__title">Struktur Organisasi Lab NCS</h3>
        </div>
        
        <div class="testimonials-one__carousel laboix-owl__carousel laboix-owl__carousel--with-shadow owl-carousel" data-owl-options='{
            "items": 1,
            "margin": 30,
            "loop": true,
            "smartSpeed": 700,
            "nav": true,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-arrow\"></span>"],
            "dots": false,
            "autoplay": true,
            "responsive": {
                "0": {"items": 1},
                "768": {"items": 2, "margin": 30},
                "992": {"items": 3, "margin": 30}
            }
        }'>
            
            <div class="item">
                <div class="team-card">
                    <div class="team-card__inner">
                        <div class="team-card__image">
                            <img src="assets/images/team/team-1-1.jpg" alt="Dr. Budi Santoso">
                        </div>
                        <div class="team-card__content">
                            <div class="team-card__content__inner">
                                <div class="team-card__content__item">
                                    <h3 class="team-card__content__title"><a>Dr. Budi Santoso</a></h3>
                                    <h6 class="team-card__content__designation">Kepala Laboratorium</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-4" style="color: #7a7f84; padding: 0 10px;">Penanggung jawab seluruh operasional dan arah riset strategis Lab NCS.</p>
            </div>
            
            <div class="item">
                 <div class="team-card">
                    <div class="team-card__inner">
                        <div class="team-card__image">
                             <img src="assets/images/team/team-1-2.jpg" alt="Siti Aminah">
                        </div>
                        <div class="team-card__content">
                            <div class="team-card__content__inner">
                                <div class="team-card__content__item">
                                    <h3 class="team-card__content__title"><a>Siti Aminah, M.Kom</a></h3>
                                    <h6 class="team-card__content__designation">Teknisi & Administrasi Lab</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-4" style="color: #7a7f84; padding: 0 10px;">Bertanggung jawab atas pemeliharaan infrastruktur teknis dan aset lab.</p>
            </div>
            
            <div class="item">
                 <div class="team-card">
                    <div class="team-card__inner">
                        <div class="team-card__image">
                             <img src="assets/images/team/team-1-3.jpg" alt="Dian Permata">
                        </div>
                        <div class="team-card__content">
                            <div class="team-card__content__inner">
                                <div class="team-card__content__item">
                                    <h3 class="team-card__content__title"><a>Dian Permata</a></h3>
                                    <h6 class="team-card__content__designation">Koordinator Asisten</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mt-4" style="color: #7a7f84; padding: 0 10px;">Mengelola jadwal, pelatihan, dan kegiatan harian para asisten lab.</p>
            </div>

        </div>
    </div>
</section>
<section class="lab-kelebihan choose-us-one pt-120 pb-120" id="kelebihan-fasilitas">
    <div class="choose-us-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url(assets/images/shapes/why-choose-us.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-us-one__left">
                    <div class="choose-us-one__top">
                        <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="Kelebihan Lab" class="sec-title__img">Kelebihan Kami</h6>
                            <h3 class="sec-title__title">Mengapa Lab NCS Unggul?</h3>
                        </div>
                        <p class="choose-us-one__top__text">Lab NCS adalah pusat riset terkemuka di Polinema yang didukung oleh sumber daya manusia dan peralatan spesialis yang jarang ditemukan. Fokus kami pada keamanan siber dan forensik digital menciptakan lingkungan belajar dan penelitian yang tak tertandingi.</p>
                    </div>
                    
                    <div class="choose-us-one__feature">
                        <div class="choose-us-one__feature__item">
                            <div class="choose-us-one__feature__thumb" style="width: auto; height: auto; background-color: transparent; margin-bottom: 15px;">
                                <i class="fas fa-microscope fa-3x text-primary d-block mb-3"></i>
                            </div>
                            <h4 class="choose-us-one__feature__title">Fokus Cyber Crime Tunggal</h4>
                            <p class="choose-us-one__feature__text">Satu-satunya lab di Polinema yang fokus pada investigasi dan pencegahan kejahatan siber.</p>
                        </div>
                        <div class="choose-us-one__feature__item">
                            <div class="choose-us-one__feature__thumb" style="width: auto; height: auto; background-color: transparent; margin-bottom: 15px;">
                                <i class="fas fa-user-shield fa-3x text-primary d-block mb-3"></i>
                            </div>
                            <h4 class="choose-us-one__feature__title">SDM Tersertifikasi</h4>
                            <p class="choose-us-one__feature__text">Tim pengelola dan peneliti bersertifikasi internasional dalam forensik dan keamanan jaringan.</p>
                        </div>
                    </div>
                    
                    <ul class="about-two__list list-unstyled" style="margin-top: 20px;">
                        <li class="about-two__list__item" style="color: #fff;"><i class="fas fa-check-circle" style="color: #4dd0ff; margin-right: 6px;"></i> Kurikulum terapan yang up-to-date dengan ancaman global. </li>
                        <li class="about-two__list__item" style="color: #fff;"><i class="fas fa-check-circle" style="color: #4dd0ff; margin-right: 6px;"></i> Jaringan kerjasama dengan industri dan instansi keamanan nasional.</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="choose-us-one__right">
                    <div class="choose-us-one__thumb" style="padding: 20px; border-radius: 12px;">
                        <h3 class="sec-title__title mb-3" style="color: #ffffff; text-shadow: 0 1px 4px rgba(0, 0, 0, 0.5);">Fasilitas Laboratorium</h3>
                        <ul class="list-unstyled about-two__list">
                            <li class="about-two__list__item" style="color: #f1f1f1; font-weight: 500;"><i class="fas fa-tools text-danger" style="color: #ff4d4d !important; margin-right: 6px;"></i> *Peralatan Forensic Digital:* Software berlisensi seperti EnCase dan FTK Imager.</li>
                            <li class="about-two__list__item" style="color: #f1f1f1; font-weight: 500;"><i class="fas fa-tools text-danger" style="color: #ff4d4d !important; margin-right: 6px;"></i> *Server Isolasi Khusus:* Lingkungan aman untuk analisis malware.</li>
                            <li class="about-two__list__item" style="color: #f1f1f1; font-weight: 500;"><i class="fas fa-tools text-danger" style="color: #ff4d4d !important; margin-right: 6px;"></i> *Area Blue Team/Red Team:* Fasilitas simulasi serangan dan pertahanan.</li>
                            <li class="about-two__list__item" style="color: #f1f1f1; font-weight: 500;"><i class="fas fa-tools text-danger" style="color: #ff4d4d !important; margin-right: 6px;"></i> *Jaringan Gigabit Terpisah:* Untuk kecepatan dan keamanan riset.</li>
                        </ul>
                        <img src="assets/images/about/why-choos-2-1.png" alt="laboix" style="margin-top: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>