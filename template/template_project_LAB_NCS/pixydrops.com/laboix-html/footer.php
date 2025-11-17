<?php
// file: footer.php (disempurnakan)
// $base_url sudah didefinisikan di header.php
?>
<footer class="main-footer main-footer--one">
    <div class="main-footer__inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--info">
                        <a href="index.php" class="footer-widget__logo">
                            <img src="<?php echo $base_url; ?>assets/images/logoJTI_footer.png" width="100%" alt="logo lab ncs">
                        </a>
                        <p class="footer-widget__text">laboratorium network and cyber security (ncs) jti polinema, berfokus pada riset dan pengembangan keamanan jaringan serta forensik digital.</p>
                        
                        </div></div><div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--link">
                        <h4 class="footer-widget__title">halaman</h4>
                        <ul class="list-unstyled footer-widget__links">
                            <li class="footer-widget__links__item"><a href="about.php">profil</a></li>
                            <li class="footer-widget__links__item"><a href="riset.php">akademik & riset</a></li>
                            <li class="footer-widget__links__item"><a href="layanan.php">sarana & prasarana</a></li>
                            <li class="footer-widget__links__item"><a href="berita.php">berita</a></li>
                            <li class="footer-widget__links__item"><a href="galeri.php">galeri</a></li>
                            <li class="footer-widget__links__item"><a href="arsip.php">arsip</a></li>
                        </ul></div></div><div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--about">
                        <h4 class="footer-widget__title">kontak kami</h4>
                        <ul class="list-unstyled footer-widget__info">
                            <li class="footer-widget__info__item"> <span class="footer-widget__info__item__text">gedung jti, politeknik negeri malang. jl. soekarno hatta no.9, malang, 65141</span></li>
                            <li class="footer-widget__info__item"> <i class="icon-telephone-call-1" aria-hidden="true"></i> <a href="tel:0341404424">(0341) 404-424</a></li>
                            <li class="footer-widget__info__item"> <i class="icon-email" aria-hidden="true"></i> <a href="mailto:jti@polinema.ac.id">jti@polinema.ac.id</a></li>
                        </ul><div class="footer-widget__social">
                            <a href="https://facebook.com/"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">facebook</span> </a>
                            <a href="https://twitter.com/"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">twitter</span> </a>
                            <a href="https://instagram.com/"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">instagram</span></a>
                        </div></div></div><div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--time">
                        <h4 class="footer-widget__title">jam operasional lab</h4>
                        <ul class="list-unstyled footer-widget__time">
                            <li class="footer-widget_time_item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> senin - jumat</p>
                                <p>08.00 - 16.00 wib</p>
                            </li>
                            <li class="footer-widget_time_item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> sabtu - minggu</p>
                                <p>tutup</p>
                            </li>
                        </ul></div></div></div></div></div><div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner row">
                <div class="col-md-6">
                    <p class="main-footer__copyright"> &copy; copyright <span class="dynamic-year"><?php echo date('y'); ?></span> lab ncs jti polinema. all rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p class="main-footer__copyright" style="font-size: 12px;">website by: m. ibnu zauzi, athaulla h, linda o, m. shabran, rakagali r.k.p</p>
                </div>
            </div></div></div>
            
            <div class="main-footer__shape">
                <img src="<?php echo $base_url; ?>assets/images/shapes/footer-shape-1-1.png" alt="shape">
            </div>
            <div class="main-footer__shape main-footer__shape--two">
                <img src="<?php echo $base_url; ?>assets/images/shapes/footer-shape-1-2.png" alt="shape">
            </div>

</footer>
</div><div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.php" aria-label="logo image"><img src="<?php echo $base_url; ?>assets/images/logo-light.png" width="155" alt="labiox"></a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:jti@polinema.ac.id">jti@polinema.ac.id</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:0341404424">(0341) 404-424</a>
            </li>
        </ul><div class="mobile-nav__social">
            <a href="https://twitter.com/"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">twitter</span> </a>
            <a href="https://facebook.com/"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">facebook</span> </a>
            <a href="https://instagram.com/"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">instagram</span></a>
        </div></div>
    </div>
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="search here...">
            <button type="submit" aria-label="search submit" class="laboix-btn laboix-btn--submite">
                <span><i class="icon-search"></i></span>
            </button>
        </form>
    </div>
    </div>
<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>

<script src="<?php echo $base_url; ?>assets/vendors/jquery/jquery-3.7.0.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jarallax/jarallax.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/wow/wow.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/imagesloaded/imagesloaded.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/isotope/isotope.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/countdown/countdown.min.js"></script>
<script src="httpspost/cdnjs.cloudflare.com/ajax/libs/chart.js/2.1.4/chart.min.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-circleType/jquery.circleType.js"></script>
<script src="<?php echo $base_url; ?>assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
<script src="<?php echo $base_url; ?>assets/js/laboix.js"></script>
</body>

</html>