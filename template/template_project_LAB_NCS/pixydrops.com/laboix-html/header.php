<?php
// file: header.php (disempurnakan)
session_start(); // memulai sesi untuk penanganan login admin nanti

// pengaturan base url (sesuaikan 'http://localhost/nama-folder-projek' saat development)
$base_url = "http://" . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="tim pbl lab ncs polinema">
    <meta name="description" content="website resmi laboratorium network & cyber security (ncs lab), jurusan teknologi informasi, politeknik negeri malang. [cite: 2] pusat unggulan riset dan edukasi keamanan siber.">

    <title>lab. network & cyber security | jti polinema</title>

    <link rel="shortcut icon" href="<?php echo $base_url; ?>assets/images/favicons/favicon-32x32.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base_url; ?>assets/images/favicons/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=lexend:wght@100;200;300;400;500;600;700;800;900&amp;family=urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/laboix-icons/style.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/laboix.css">
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(<?php echo $base_url; ?>assets/images/loader.png);"></div>
    </div>
    <div class="page-wrapper">