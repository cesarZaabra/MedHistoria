<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php wp_head(); ?>

    <!-- Favicon -->
    <link rel="icon" href="<?= get_template_directory_uri() ?>/assets/img/favicon.png">

</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Medikit Color Plate -->
<!--<div class="color-plate">-->
<!--    <a class="color-plate-icon"><i class="fa fa-cog fa-spin"></i></a>-->
<!--    <h4>MedHistoria</h4>-->
<!--    <span class="color1"></span>-->
<!--    <span class="color2"></span>-->
<!--    <span class="color3"></span>-->
<!--    <span class="color4"></span>-->
<!--    <span class="color5"></span>-->
<!--    <span class="color6"></span>-->
<!--    <span class="color7"></span>-->
<!--    <span class="color8"></span>-->
<!--    <span class="color9"></span>-->
<!--    <span class="color10"></span>-->
<!--    <span class="color11"></span>-->
<!--    <span class="color12"></span>-->
<!--</div>-->
<!-- /End Color Plate -->

<!-- Header Area -->
<header class="header style2" >
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li><a href="#">Producto</a></li>
                        <li><a href="preguntas-frecuentes.html">Preguntas Frecuentes</a></li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+ 57 601 712 39 45</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">servicioalcliente@medhistoria.com</a></li>
                    </ul>
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Middle Header -->
    <div class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <!-- Start Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="#"></a>
                    </div>
                    <!-- End Logo -->
                    <!-- Mobile Nav -->
                    <div class="mobile-nav"></div>
                    <!-- End Mobile Nav -->
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="widget-main">
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <i class="icofont-ui-call"></i>
                            <p>Llámenos en cualquier momento</p>
                            <h4>+ 057 321 244 98 69</h4>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <i class="icofont-clock-time"></i>
                            <p>Horario de atención</p>
                            <h4>Lun - Dom: 05:00-22:00</h4>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget button">
                            <div class="get-quote">
                                <a href="appointment.html" class="btn">Iniciar Sesión</a>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Middle Header -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <?php
                                wp_nav_menu([
                                    'theme_location' => 'primary-menu',
                                    'menu_class' => 'nav menu'
                                ]);
                                ?>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="search-top">
                                <div class="search"><a href="#0"><i class="icofont-search-1"></i></a></div>
                                <form class="search-form">
                                    <input type="text" placeholder="search" name="search">
                                    <button value="search" type="submit"><i class="icofont-search-1"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->