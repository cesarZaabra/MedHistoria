<!-- Footer Area -->
<footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/logo-Medhistoria-blanco.png" class="img-fluid">
                        <br>
                        <br>
                        <p>MedHistoria es un software médico tecnológico al servicio de la salud, donde podrá gestionar todas sus historias clínicas de diferentes especialidades.</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-whatsapp"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Enlaces rápidos</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="planes.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Planes</a></li>
                                    <li><a href="demo.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Demo</a></li>
                                    <li><a href="crear-cuenta.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Crear cuenta</a></li>
                                    <li><a href="preguntas-frecuentes.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Preguntas Frecuentes</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="politicas-de-privacidad.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Políticas de Privacidad</a></li>
                                    <li><a href="politica-de-cookies.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Políticas de Cookies</a></li>
                                    <li><a href="terminos-y-condiciones.html"><i class="fa fa-caret-right" aria-hidden="true"></i>Términos y condiciones</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Horario de atención</h2>
                        <ul>
                            <li><a><i class="fa fa-caret-right" aria-hidden="true"></i> Domingo a Domingo</a></li>
                            <li style="padding-left: 20px;"><a> 05:00 - 22:00</a></li>
                            <li style="padding-left: 20px;"><a> + 057 321 244 98 69</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Boletín</h2>
                        <p>Suscríbase a nuestro boletín para recibir todas nuestras noticias en su bandeja de entrada.</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="Email" class="common-input" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Email'" required="" type="email">
                            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2022 | Todos los derechos reservados a<a href="https://zaabra.co/" target="_blank">Zaabra.co</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<?php wp_footer(); ?>
</body>
</html>