<?php
// file: layanan.php (Rombak Ulang: KBBI & Kapital)
include 'header.php';
include "navbar.php";
// todo: include 'koneksi.php'; (jika nanti sudah siap)
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Sarana & Prasarana</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Sarana</span></li>
        </ul>
    </div>
</section>

<section class="service-page service-page--one pt-120 pb-120">
    <div class="service-page__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/shapes/service-shape-1-1.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/customer-review.png" alt="Layanan & Fasilitas" class="sec-title__img">Sarana & Prasarana</h6>
                    <h3 class="sec-title__title">Fasilitas Pendukung Riset & Praktikum</h3>
                </div>
            </div>
        </div>
        <div class="row gutter-y-30">
        
            <?php
            // todo: Blok dinamis PDO PostgreSQL untuk 'tbl_sarana_prasarana'
            /*
            try {
                global $pdo;
                $query_sarana = "SELECT * FROM tbl_sarana_prasarana ORDER BY nama_sarana ASC";
                $stmt = $pdo->query($query_sarana);
                $data_sarana = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                if (empty($data_sarana)) {
                    echo "<div class='col-12'><p class='text-center'>Belum ada data sarana prasarana.</p></div>";
                } else {
                    $delay = 400;
                    foreach ($data_sarana as $sarana) {
            ?>

            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='<?php echo $delay; ?>ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a><?php echo htmlspecialchars($sarana['nama_sarana']); ?></a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url . 'uploads/sarana/' . htmlspecialchars($sarana['foto_sarana']); ?>" alt="<?php echo htmlspecialchars($sarana['nama_sarana']); ?>">
                            </div>
                        </div>
                         <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            <?php echo htmlspecialchars($sarana['deskripsi_sarana']); ?>
                            <br>(Jumlah: <?php echo (int)$sarana['jumlah']; ?>, Kondisi: <?php echo htmlspecialchars($sarana['kondisi']); ?>)
                        </p>
                    </div>
                </div>
            </div>

            <?php
                        $delay += 200;
                        if ($delay > 800) $delay = 400; // Reset animasi
                    } // end foreach
                } // end else
            } catch (PDOException $e) {
                echo "<div class='col-12'><p class='text-center alert alert-danger'>Gagal memuat data sarana.</p></div>";
            }
            */
            ?>

            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a>Perangkat Keras Jaringan</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url; ?>assets/images/service/service-1-1.png" alt="Infrastruktur Jaringan">
                            </div>
                        </div>
                        <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Lab dilengkapi dengan perangkat standar industri seperti Router, Switch (L2/L3), dan Firewall untuk praktikum dan simulasi jaringan nyata.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a>Perangkat Riset IoT & Server</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url; ?>assets/images/service/service-1-4.png" alt="Perangkat Riset">
                            </div>
                        </div>
                         <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Tersedia server untuk virtualisasi, perangkat Raspberry Pi, dan berbagai sensor untuk mendukung penelitian di bidang IoT dan komputasi awan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='800ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a>Software Simulator Jaringan</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url; ?>assets/images/service/service-1-2.png" alt="Software Simulator">
                            </div>
                        </div>
                         <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Perangkat lunak seperti GNS3, Cisco Packet Tracer, dan simulator lainnya untuk merancang dan menguji topologi jaringan yang kompleks.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="service-card wow fadeInUp h-100" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="service-card__inner">
                        <div class="service-card__top">
                            <h3 class="service-card__title"><a>Software Keamanan Siber</a></h3>
                        </div>
                        <div class="service-card__thumb">
                            <div class="service-card__thumb__item">
                                <img src="<?php echo $base_url; ?>assets/images/service/service-1-3.png" alt="Software Keamanan">
                            </div>
                        </div>
                         <p class="service-card__text" style="padding: 20px 30px 0 30px;">
                            Berbagai tools untuk praktikum keamanan siber, termasuk untuk penetration testing, forensik digital (Autopsy, FTK Imager), dan analisis malware.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>