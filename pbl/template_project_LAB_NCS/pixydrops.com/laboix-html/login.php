<?php
// file: login.php (Versi Desain Bagus)
include 'header.php';
include "navbar.php";
?>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <div class="container">
        <h2 class="page-header__title">Login Admin</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="index.php">Beranda</a></li>
            <li><span>Login</span></li>
        </ul>
    </div>
</section>
<section class="form-one pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="form-one__form-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="form-one__form-content">
                        <div class="sec-title text-center">
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Login" class="sec-title__img">Admin Panel</h6>
                            <h3 class="sec-title__title">Login Pengelola Website Lab NCS</h3>
                            <p class="sec-title__text pt-3">Halaman ini dikhususkan untuk admin pengelola website.</p>
                        </div>
                        
                        <form class="form-one__form contact-form-validated" action="[NAMA_FILE_PROSES_LOGIN_ANDA].php" method="post">
                            <div class="form-one__group">
                                <div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                                    <input type="text" name="username" placeholder="Username Admin" required>
                                </div>
                                <div class="form-one__control wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                                    <input type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-one__control form-one__control--full wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                                    <button type="submit" class="laboix-btn"><span>Login</span></button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>