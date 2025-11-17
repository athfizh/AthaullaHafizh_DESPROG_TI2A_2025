<?php
// file: navbar.php (Rombak Ulang: KBBI & Kapital)
// $base_url didapat dari header.php
// session_start() juga sudah dipanggil di header.php
?>
<header class="main-header sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo logo-laboix">
                <a href="<?php echo $base_url; ?>index.php">
                    <img src="<?php echo $base_url; ?>assets/images/logo-dark.png" alt="Lab NCS JTI Polinema" width="133">
                </a>
            </div>
            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">

                    <li>
                        <a href="<?php echo $base_url; ?>index.php">Beranda</a>
                    </li>

                    <li class="dropdown">
                        <a href="<?php echo $base_url; ?>about.php">Profil</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo $base_url; ?>about.php#profil">Profil Lab</a></li>
                            <li><a href="<?php echo $base_url; ?>about.php#visi-misi">Visi & Misi</a></li>
                            <li><a href="<?php echo $base_url; ?>about.php#struktur-organisasi">Struktur Pengelola</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="<?php echo $base_url; ?>riset.php">Akademik & Riset</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo $base_url; ?>riset.php#bidang-kajian">Bidang Kajian</a></li>
                            <li><a href="<?php echo $base_url; ?>riset.php#roadmap">Roadmap Penelitian</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo $base_url; ?>layanan.php">Sarana & Prasarana</a>
                    </li>

                    <li class="dropdown">
                        <a href="#">Aktivitas</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo $base_url; ?>galeri.php">Galeri Kegiatan</a></li>
                            <li><a href="<?php echo $base_url; ?>agenda.php">Agenda</a></li>
                            <li><a href="<?php echo $base_url; ?>berita.php">Berita</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo $base_url; ?>arsip.php">Arsip</a>
                    </li>

                    <li class="dropdown">
                        <a href="#">Link Terkait</a>
                         <ul class="sub-menu">
                            <li><a href="https://www.polinema.ac.id/" target="_blank">Polinema</a></li>
                            <li><a href="https://jti.polinema.ac.id/" target="_blank">JTI Polinema</a></li>
                            <li><a href="https://sinta.kemdikbud.go.id/" target="_blank">SINTA</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
            <div class="main-header__right">
                <div class="main-header__link">
                    <?php if (isset($_SESSION['admin_username'])): ?>
                        <a href="<?php echo $base_url; ?>admin.php" class="laboix-btn main-header__btn">Dashboard</a>
                    <?php else: ?>
                        <a href="<?php echo $base_url; ?>login.php" class="laboix-btn main-header__btn">Login</a>
                    <?php endif; ?>
                </div>

                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </div>
</header>