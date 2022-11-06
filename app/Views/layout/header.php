<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $site['site_name']; ?> | <?= $site['site_title']; ?></title>
    <meta content="<?= $site['site_description']; ?>" name="description">
    <meta content="PMII, PR, PK, PC, PKC, PB, Pergerakan Mahasiswa Islam Indonesia" name="keywords">

    <!-- Favicons -->
    <link href="/assets/frontend/img/favicon.png" rel="icon">
    <link href="/assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand - v3.5.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?= $site['site_mail']; ?>"><?= $site['site_mail']; ?></a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= $site['site_wa']; ?></span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="<?= $site['site_instagram']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?= $site['site_facebook']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?= $site['site_twitter']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="<?= $site['site_linkedin']; ?>" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/"><img src="/assets/frontend/images/<?= $site['site_favicon']; ?>"> <span><?= $site['site_name']; ?></span></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="/gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="/team">Team</a></li>
                    <li class="dropdown"><a href="/post"><span>News</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/category/news">Berita</a></li>
                            <li><a href="/category/opinion">Opini</a></li>
                            <li><a href="#">Cerpen</a></li>
                            <li><a href="#">Puisi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/document">Document</a></li>
                    <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>