<?php
/**
 * Template Name: Demo
 */
get_header();
?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Demo</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Demo</li>
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
                        <div class="contact-us-form">
                            <h2>Demo</h2>
                            <p>Conozca nuestra plataforma. Ingrese sus datos en el siguiente formulario y solicite una demostración gratuita por 7 días.</p>
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
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/Demo.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->
<?php get_footer();