<?php
/**
 * Template Name: Contacto
 */
get_header();
?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Contáctenos</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Contáctenos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-us-left">
                            <!--Start Google-map -->
                            <div id="myMap"></div>
                            <!--/End Google-map -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <h2>Contáctenos</h2>
                            <p>Ingrese sus datos y le contáctaremos pronto.</p>
                            <!-- Form -->
                            <form class="form" method="post" action="mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Nombre" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Teléfono" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Su mensaje" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Enviar</button>
                                        </div>
                                        <div class="checkbox">
                                            <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">¿Desea susbribirse al boletín?</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont icofont-ui-call"></i>
                            <div class="content">
                                <h3>601 712 3945</h3>
                                <p>servicioalcliente@medhistoria.com</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont-google-map"></i>
                            <div class="content">
                                <h3>Cra 64 #67b - 89 Int 2</h3>
                                <p>Bogotá D.C.</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont icofont-wall-clock"></i>
                            <div class="content">
                                <h3>Domingo a domingo</h3>
                                <p>05:00 - 22:00</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->
<?php get_footer();