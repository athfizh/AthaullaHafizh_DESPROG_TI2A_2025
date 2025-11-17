<?php
// file: slider.php (disempurnakan)
// todo: data slider ini bisa dibuat dinamis, misal mengambil 3 berita/agenda terbaru dari db.
// untuk saat ini, kita gunakan konten statis.
?>
<section class="main-slider-one">
    <div class="main-slider-one__carousel laboix-owl__carousel owl-carousel" data-owl-options='{
		"items": 1,
		"margin": 0,
		"loop": true,
		"smartSpeed": 700,
		"nav": true,
		"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-arrow\"></span>"],
		"dots": false,
		"autoplay": true,
        "autoplayTimeout": 5000
		}'>
        
        <div class="item">
            <div class="main-slider-one__item">
                <div class="main-slider-one__bg" style="background-image: url(<?php echo $base_url; ?>assets/images/backgrounds/slider-1-1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider-one__content">
                                <span class="main-slider-one__tagline">selamat datang di lab ncs jti polinema</span>
                                <h2 class="main-slider-one__title">pusat riset<br>keamanan jaringan & siber</h2>
                                <p class="main-slider-one__text">menjadi laboratorium unggul dan rujukan dalam bidang jaringan dan keamanan siber.</p>
                                <div class="main-slider-one__link">
                                    <a href="about.php" class="laboix-btn">pelajari lebih lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
</section>