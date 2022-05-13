<?php
/**
 * Template Name: Crear cuenta
 */
get_header();
?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Crear cuenta</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Crear cuenta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shop Register -->
    <section class="register section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="register-left">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="register-form">
                            <h2>Crear una cuenta</h2>
                            <p>Regístrese para ser parte de MedHistoria</p>
                            <!-- Form -->
                            <form class="form" method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Nombre" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Apellido" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Teléfono" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Contraseña" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Confirmar contraseñaa" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Registrar</button>
                                        </div>
                                        <div class="checkbox">
                                            <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Si, acepto todos los</label>
                                        </div>
                                        <a href="terminos-y-condiciones.html" class="terms">Términos y condiciones</a>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Register -->
<?php get_footer();