<?php
// file: agenda.php (File Baru)
include 'header.php'; // $base_url ada di sini
include "navbar.php";
// todo: include 'koneksi.php'; (jika nanti sudah siap)
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Agenda Kegiatan</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Agenda</span></li>
        </ul>
    </div>
</section>

<section class="blog-one pt-120 pb-120">
    <div class="container">
        <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
            <h6 class="sec-title__tagline"><img src="<?php echo $base_url; ?>assets/images/shapes/calendar.png" alt="Agenda" class="sec-title__img">Agenda</h6>
            <h3 class="sec-title__title">Agenda Kegiatan Mendatang</h3>
        </div>
        <div class="row gutter-y-30">

            <?php
            // todo: Blok dinamis PDO PostgreSQL untuk 'tbl_agenda'
            /*
            try {
                global $pdo; 
                // Mengambil agenda yang akan datang (tanggal selesai >= hari ini)
                $query_agenda = "
                    SELECT * FROM tbl_agenda
                    WHERE tanggal_selesai >= CURRENT_DATE
                    ORDER BY tanggal_mulai ASC
                ";
                $stmt = $pdo->query($query_agenda);
                $data_agenda = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                if (empty($data_agenda)) {
                    echo "<div class='col-12'><p class='text-center'>Belum ada agenda yang dijadwalkan.</p></div>";
                } else {
                    $delay = 400;
                    foreach ($data_agenda as $agenda) {
                        $tanggal_mulai = date_create($agenda['tanggal_mulai']);
                        $hari = date_format($tanggal_mulai, 'd');
                        $bulan_teks = date_format($tanggal_mulai, 'M');
            ?>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='<?php echo $delay; ?>ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url . 'uploads/agenda/' . htmlspecialchars($agenda['gambar_agenda']); ?>" alt="<?php echo htmlspecialchars($agenda['nama_agenda']); ?>">
                            <a href="<?php echo $base_url; ?>agenda-detail.php?id=<?php echo $agenda['id_agenda']; ?>" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day"><?php echo $hari; ?></span><?php echo strtolower($bulan_teks); ?></div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="#" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <i class="fa fa-map-marker-alt" style="font-size: 24px; color: #00c497;"></i>
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name"><?php echo htmlspecialchars($agenda['lokasi']); ?></h6>
                                    <span class="blog-card__author__deg">Lokasi Acara</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="<?php echo $base_url; ?>agenda-detail.php?id=<?php echo $agenda['id_agenda']; ?>"><?php echo htmlspecialchars($agenda['nama_agenda']); ?></a></h3>
                        <div class="blog-card__content__btn">
                            <a href="<?php echo $base_url; ?>agenda-detail.php?id=<?php echo $agenda['id_agenda']; ?>" class="blog-card__content__btn__link">Lihat Detail<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
                        $delay += 200;
                    } // end foreach
                } // end else
            } catch (PDOException $e) {
                echo "<div class='col-12'><p class='text-center alert alert-danger'>Gagal memuat agenda.</p></div>";
            }
            */
            ?>
            
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-1.png" alt="Workshop Keamanan Siber">
                            <a href="agenda-detail.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">20</span>NOV</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                        <div class="blog-card__author">
                            <a href="#" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                     <i class="fa fa-map-marker-alt" style="font-size: 24px; color: #00c497;"></i>
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Aula Gedung JTI</h6>
                                    <span class="blog-card__author__deg">Lokasi Acara</span>
                                </div>
                            </a>
                        </div>
                        <h3 class="blog-card__title"><a href="agenda-detail.php">Workshop Keamanan Siber: Melindungi Aset Digital</a></h3>
                        <div class="blog-card__content__btn">
                            <a href="agenda-detail.php" class="blog-card__content__btn__link">Lihat Detail<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='600ms'>
                    <div class="blog-card__image">
                         <div class="blog-card__image__item">
                            <img src="<?php echo $base_url; ?>assets/images/blog/blog-1-2.png" alt="Seminar Forensik Digital">
                            <a href="agenda-detail.php" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">05</span>DES</div>
                    </div>
                    <div class="blog-card__content" style="border: none !important;">
                         <div class="blog-card__author">
                            <a href="#" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                     <i class="fa fa-map-marker-alt" style="font-size: 24px; color: #00c497;"></i>
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">Online (Zoom)</h6>
                                    <span class="blog-card__author__deg">Lokasi Acara</span>
                                </div>
                            </a>
                        </div>
                         <h3 class="blog-card__title"><a href="agenda-detail.php">Seminar Nasional: Tantangan Forensik Digital di Era IoT</a></h3>
                         <div class="blog-card__content__btn">
                            <a href="agenda-detail.php" class="blog-card__content__btn__link">Lihat Detail<i class="icon-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php
include 'footer.php';
?>