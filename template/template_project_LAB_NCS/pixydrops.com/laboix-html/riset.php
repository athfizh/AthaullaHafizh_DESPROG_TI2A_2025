<?php
// file: riset.php (Rombak Ulang: KBBI & Kapital)
include 'header.php';
include "navbar.php";
// todo: include 'koneksi.php'; (jika nanti sudah siap)
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Akademik & Riset</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Riset</span></li>
        </ul>
    </div>
</section>

<section class="service-page service-page--one pt-120 pb-90" id="bidang-kajian">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/customer-review.png" alt="Bidang Kajian" class="sec-title__img">Fokus Riset</h6>
                    <h3 class="sec-title__title">Bidang Kajian Laboratorium NCS</h3>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-shield"></span></div>
                        <h3 class="service-card__title"><a>Keamanan Siber</a></h3>
                        <p class="service-card__text">Fokus pada deteksi intrusi, forensik digital, dan kriptografi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-web-development-1"></span></div>
                        <h3 class="service-card__title"><a>Jaringan Komputer</a></h3>
                        <p class="service-card__text">Mengkaji arsitektur, manajemen, dan optimasi jaringan skala besar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-wifi-1"></span></div>
                        <h3 class="service-card__title"><a>Jaringan Nirkabel</a></h3>
                        <p class="service-card__text">Penelitian pada teknologi Wi-Fi, 5G, dan keamanan jaringan nirkabel.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='300ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-broadcast-1"></span></div>
                        <h3 class="service-card__title"><a>Jaringan Sensor Nirkabel</a></h3>
                        <p class="service-card__text">Pengembangan dan implementasi JSN untuk monitoring lingkungan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-cloud-1"></span></div>
                        <h3 class="service-card__title"><a>Komputasi Awan & Jaringan</a></h3>
                        <p class="service-card__text">Mencakup virtualisasi jaringan, SDN, dan keamanan cloud.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='500ms'>
                    <div class="service-card__inner">
                        <div class="service-card__icon"><span class="icon-iot-1"></span></div>
                        <h3 class="service-card__title"><a>Internet of Things (IoT)</a></h3>
                        <p class="service-card__text">Riset pada arsitektur, protokol, dan keamanan perangkat IoT.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-60 pb-120" id="roadmap" style="background-color: #f4f7f6;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/determined.png" alt="Roadmap" class="sec-title__img">Roadmap Penelitian</h6>
                    <h3 class="sec-title__title">Peta Jalan Riset Lab NCS</h3>
                </div>
                <p class="text-center mb-5">Peta jalan penelitian Laboratorium NCS berfokus pada pengembangan solusi inovatif untuk tantangan keamanan siber dan jaringan masa depan. Dokumen lengkap dapat diunduh di bawah ini.</p>
                
                <div class="text-center">
                    <?php
                    // todo: Link PDF ini bisa diambil dari 'tbl_dokumen' atau 'tbl_halaman_statis'
                    /*
                    global $pdo;
                    $stmt = $pdo->query("SELECT link_file FROM tbl_dokumen WHERE nama_dokumen = 'roadmap_riset'");
                    $link_roadmap = $stmt->fetchColumn();
                    if (!$link_roadmap) $link_roadmap = "#"; // fallback
                    */
                    $link_roadmap = "assets/dokumen/roadmap-ncs-2025.pdf"; // Placeholder
                    ?>
                    <a href="<?php echo $base_url . $link_roadmap; ?>" class="laboix-btn" download>Unduh Roadmap (PDF)</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>