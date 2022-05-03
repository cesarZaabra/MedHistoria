<?php get_header(); ?>

    <!-- Slider Area -->
    <section class="slider index2">
        <div class="hero-slider">
            <?php
            $query = new WP_Query([
                'post_type' => 'sliders',
                'post_per_page' => 5
            ]);

            while ($query->have_posts()){
                $query->the_post();
                //Botones
                $btn_conocer_text = get_post_meta(get_the_ID(), 'btn_conocer_text', true);
                $btn_conocer_url = get_post_meta(get_the_ID(), 'btn_conocer_url', true);
                $btn_contactenos_text = get_post_meta(get_the_ID(), 'btn_contactenos_text', true);
                $btn_contactenos_url = get_post_meta(get_the_ID(), 'btn_contactenos_url', true);

                ?>
                <!-- Start Single Slider -->
                <div class="single-slider" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text">
                                    <h1><?php the_title(); ?></h1>
                                    <p><?php the_content(); ?></p>
                                    <div class="button">
                                        <?= (isset($btn_conocer_text) and isset($btn_conocer_url)) ? "<a href='{$btn_conocer_url}' class='btn primary'>{$btn_conocer_text}</a>":""?>
                                        <?= (isset($btn_contactenos_text) and isset($btn_contactenos_url)) ? "<a href='{$btn_contactenos_url}' class='btn'>{$btn_contactenos_text}</a>":""?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slider -->
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Feautes -->
    <section class="Feautes index2 section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>¿Qué es MedHistoria?</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                        <p>MedHistoria es una plataforma al servicio de la salud, donde podrá gestionar todas sus historias clínicas online de diferentes especialidades, generando una solución confiable, accesible y segura que le ayudará a gestionar sus consultas en un registro médico sin esfuerzo. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features wow fadeIn" data-wow-delay="0.4s" data-wow-duration="1s">
                        <div class="signle-icon">
                            <i class="icofont-folder"></i>
                        </div>
                        <h3>Historia clínica personalizada</h3>
                        <p>Te ofrecemos el servicio de Historia Clínica online completamente personalizada.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
                        <div class="signle-icon">
                            <i class="icofont-calendar"></i>
                        </div>
                        <h3>Agendamiento online</h3>
                        <p>Agende y gestione todas las citas de sus pacientes a través de MedHistoria.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
                        <div class="signle-icon">
                            <i class="icofont-laptop-alt"></i>
                        </div>
                        <h3>Acceso desde cualquier lugar</h3>
                        <p>Ingrese desde cualquier dispositivo de forma rápida a nuestra plataforma.</p>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes -->

    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun wow fadeIn" data-wow-delay="1s" data-wow-duration="0.5s">
                        <i class="icofont-world"></i>
                        <div class="content">
                            <span class="counter">5</span>
                            <p>Países</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun wow fadeIn" data-wow-delay="0.8s" data-wow-duration="0.5s">
                        <i class="icofont-doctor"></i>
                        <div class="content">
                            <span class="counter">1.289</span>
                            <p>Médicos Especialistas</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun wow fadeIn" data-wow-delay="0.6s" data-wow-duration="0.5s">
                        <i class="icofont-users-alt-3"></i>
                        <div class="content">
                            <span class="counter">655.000</span>
                            <p>Pacientes</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun wow fadeIn" data-wow-delay="0.4s" data-wow-duration="0.5s">
                        <i class="icofont-medical-sign"></i>
                        <div class="content">
                            <span class="counter">1.100000</span>
                            <p>Atenciones médicas</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->

    <!-- Start Why choose -->
    <section class="why-choose section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ofrecemos diferentes servicios para mejorar su salud</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                        <p>La automatización de procesos y servicios ha beneficiado la vida de los pacientes y transformado los sistemas de salud en todo el mundo.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>Quiénes Somos</h3>
                        <p>MedHistoria es un software medico tecnológico al servicio de la salud, donde podrá gestionar sus historias clínicas online de diferentes especialidades.</p>
                        <p>Ofrecemos Historia Clínica On-Line, con diferentes servicios que contribuyen a prestar una excelente atención de sus pacientes.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Ahorre tiempo elaborando sus Historias Clínicas. </li>
                                    <li><i class="fa fa-caret-right"></i>Innovación y Tecnología en MedHistoria.</li>
                                    <li><i class="fa fa-caret-right"></i>¡Somos Interoperables!</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list">
                                    <li><i class="fa fa-caret-right"></i>Historia Clínica Online Dinámica. </li>
                                    <li><i class="fa fa-caret-right"></i>Información 100% segura en nuestros servidores.</li>
                                    <li><i class="fa fa-caret-right"></i>Servicio de agenda online</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>-->
                            <!--/ End Video Animation
                            <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>-->
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->

    <!-- Start Call to action -->
    <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>¿Necesita más Información?</h2>
                        <p>Escríbanos y con gusto atenderemos todas sus inquietudes</p>
                        <div class="button">
                            <a href="contacto.html" class="btn">Conoce más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call to action -->

    <!-- Start portfolio -->
    <section class="portfolio section" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ofrecemos el mejor servicio a un precio razonable</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                        <p>Una plataforma segura en la que podrá gestionar toda la información de sus pacientes de forma rápida.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        <div class="single-pf wow fadeIn" data-wow-delay="0.2s" data-wow-duration="0.8s">
                            <img src= "<?= get_template_directory_uri() ?>/assets/img/carrusel/Pediatria.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf wow fadeIn" data-wow-delay="0.4s" data-wow-duration="0.8s">
                            <img src= "<?= get_template_directory_uri() ?>/assets/img/carrusel/Enfermeria.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf wow fadeIn" data-wow-delay="0.6s" data-wow-duration="0.8s">
                            <img src= "<?= get_template_directory_uri() ?>/assets/img/carrusel/Medicina.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf wow fadeIn" data-wow-delay="0.8s" data-wow-duration="0.8s">
                            <img src= "<?= get_template_directory_uri() ?>/assets/img/carrusel/Neurologia.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf wow fadeIn" data-wow-delay="1s" data-wow-duration="0.8s">
                            <img src= "<?= get_template_directory_uri() ?>/assets/img/carrusel/Cardiologia.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf wow fadeIn" data-wow-delay="1.2s" data-wow-duration="0.8s">
                            <img src= "<?= get_template_directory_uri() ?>/assets/img/carrusel/Historia-clinica.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf wow fadeIn" data-wow-delay="1.4s" data-wow-duration="0.8s">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/carrusel/Laboratorio.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf wow fadeIn" data-wow-delay="1.6s" data-wow-duration="0.8s">
                            <img src= "<?= get_template_directory_uri() ?>/assets/img/carrusel/Optometria.png" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->

    <!-- Start service -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>¿Qué nos diferencia?</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <i class="icofont-folder-open"></i>
                        <h4><a href="service-details.html">Historias clínicas dinámicas</a></h4>
                        <p>En un formato personalizable y fácil de usar que centralizará toda la información médica en un solo lugar.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <i class="icofont-lock"></i>
                        <h4><a href="service-details.html">Información segura</a></h4>
                        <p>Toda su información y la de sus pacientes estará 100% segura alojada en nuestra plataforma.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                        <i class="icofont-computer"></i>
                        <h4><a href="service-details.html">100% online</a></h4>
                        <p>Podrá agendar citas, gestionar historias clínicas, administrar contactos y más,  todo 100% online y en un solo lugar.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                        <i class="icofont-gears"></i>
                        <h4><a href="service-details.html">Interoperabilidad</a></h4>
                        <p>La Interoperabilidad <b>SI</b> aplica en MediHistoria.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">
                        <i class="icofont-live-support"></i>
                        <h4><a href="service-details.html">Soporte técnico</a></h4>
                        <p>Podrá solicitar soporte técnico en los horarios de 5:00 a 22:00 de Lunes a Domingo</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service wow fadeInUp" data-wow-delay="1.4s" data-wow-duration="1s">
                        <i class="icofont-light-bulb"></i>
                        <h4><a href="service-details.html">Tecnología</a></h4>
                        <p>Nuestra plataforma cuenta con una gran tecnología en desarrollo para brindar el mejor servicio.</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End service -->

    <!-- Start Team -->
    <section id="team" class="team section overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Nuestros profesionales recomiendan MedHistoria</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img2.png" alt="#">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12" data-tilt>
                    <!-- Single Team -->
                    <div class="single-team wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <div class="t-head">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/profesionales/Santiago Polo.png" alt="#">
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p>Dermatólogo</p>
                            <h2><a href="doctor-details.html">Dr. Santiago Polo</a></h2>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 " data-tilt>
                    <!-- Single Team -->
                    <div class="single-team wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/profesionales/Monica Reyes.png" alt="#">
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Pediatría</p>
                            <h2><a href="doctor-details.html">Dra. Mónica Reyes</a></h2>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 " data-tilt>
                    <!-- Single Team -->
                    <div class="single-team wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/profesionales/Jose Fuentes.png" alt="#">
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Cardiólogo</p>
                            <h2><a href="doctor-details.html">Dr. José Fuentes</a></h2>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12" data-tilt>
                    <!-- Single Team -->
                    <div class="single-team wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/profesionales/Juan Castañeda.png" alt="#">
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Ginecólogo</p>
                            <h2><a href="doctor-details.html">Dr. Juan Castañeda</a></h2>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team -->

    <!-- Start Departments -->
    <section class="departments section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Cree sus Historias Clínicas, use nuestras plantillas para su consultorio, IPS, Clínica, Centros médicos y/o Especialidades</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="department-tab">
                        <!-- Nav Tab  -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#t-tab1" role="tab"><i class="icofont-ambulance-cross"></i><span class="first">Instituciones médicas</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab2" role="tab"><i class="icofont-bandage"></i><span class="first">Cirugía</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab3" role="tab"><i class="icofont-doctor-alt"></i><span class="first">Dermatología</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab4" role="tab"><i class="icofont-first-aid"></i><span class="first">Medicina Interna</span></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab5" role="tab"><i class="icofont-kid"></i><span class="first">Pediatría</span></a></li>
                        </ul>
                        <!--/ End Nav Tab -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Tab 1 -->
                            <div class="tab-pane fade show active" id="t-tab1" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Instituciones médicas</h3>
                                            <p class="p1">Empieza ahora a transformar tu IPS, Clínica, Consultorio, Centros médicos con MedHistoria.</p>

                                            <p>Desafío para el futuro en este sentido es lograr la incorporación total de la tecnología en las clínicas, hospitales, centros médicos, IPS y laboratorios que hoy son ajenos a ella por la falta de recursos económicos y con la que se salvarían en un número importante de vidas diarias, al igual que se mejoraría la atención y bienestar de todos los ciudadanos.</p>
                                            <ul class="list">
                                                <li><i class="fa fa-check"></i> Tecnología al servicio de la salud </li>
                                                <li><i class="fa fa-check"></i> Formatos de Historia Clínica para todas las especialidades</li>
                                                <li><i class="fa fa-check"></i> La Información de tus pacientes e historial clínico 100% seguro siempre disponible con múltiples capas de seguridad</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="https://via.placeholder.com/570x370" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Tab 1 -->
                            <!-- Tab 2 -->
                            <div class="tab-pane fade" id="t-tab2" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Historia clínica Cirugía</h3>
                                            <p class="p1">Con funcionamiento simple, intuitivo y muy funcional, diseñada para la gestión global de consultas médicas.</p>
                                            <p>Historia clínica completa, que posee ficha de pacientes, control de pagos, configuración de convenios, confidencialidad de la información de datos de sus pacientes, con permisos configurables, fácil de usar.</p>
                                            <ul class="list">
                                                <li><i class="fa fa-check"></i>Historias Clínicas personalizables y amigables </li>
                                                <li><i class="fa fa-check"></i> Adaptada para esta especialidad</li>
                                                <li><i class="fa fa-check"></i>Refleja el proceso de atención al paciente quirúrgico ambulatorio o de corta estadía</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="https://via.placeholder.com/570x370" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Tab 2 -->
                            <!-- Tab 3 -->
                            <div class="tab-pane fade" id="t-tab3" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Dermatología</h3>
                                            <p class="p1">“Creada para una excelente atención medica en esta especialidad, con información clínica actualizada y con un desarrollo tecnológico que contribuye a la plena satisfacción del paciente”</p>
                                            <p>La historia clínica dermatológica incluye Identificación, tiempo de evolución, antecedentes y características clínicas; estos parámetros incluidos regularmente aportan la riqueza semiología que conducen al diagnóstico y facilitan la opción del mejor tratamiento.</p>
                                            <ul class="list">
                                                <li><i class="fa fa-check"></i>Información clínica </li>
                                                <li><i class="fa fa-check"></i> Historia clínica única electrónica con formato definido para esta especialidad. </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="https://via.placeholder.com/570x370" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Tab 3 -->
                            <!-- Tab 4 -->
                            <div class="tab-pane fade" id="t-tab4" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Medicina Interna</h3>
                                            <p class="p1">Empieza ahora a transformar tu IPS, Clínica, Consultorio, Centros médicos con MedHistoria.</p>
                                            <p>Desafío para el futuro en este sentido es lograr la incorporación total de la tecnología en las clínicas, hospitales, centros médicos, IPS y laboratorios que hoy son ajenos a ella por la falta de recursos económicos y con la que se salvarían en un número importante de vidas diarias, al igual que se mejoraría la atención y bienestar de todos los ciudadanos.</p>
                                            <ul class="list">
                                                <li><i class="fa fa-check"></i> Tecnología al servicio de la salud </li>
                                                <li><i class="fa fa-check"></i> Formatos de Historia Clínica para todas las especialidades</li>
                                                <li><i class="fa fa-check"></i>La Información de tus pacientes e historial clínico 100% seguro siempre disponible con múltiples capas de seguridad</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="https://via.placeholder.com/570x370" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Tab 4 -->
                            <!-- Tab 5 -->
                            <div class="tab-pane fade" id="t-tab5" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="department-left">
                                            <h3>Pediatría</h3>
                                            <p class="p1">Empieza ahora a transformar tu IPS, Clínica, Consultorio, Centros médicos con MedHistoria.</p>
                                            <p>Desafío para el futuro en este sentido es lograr la incorporación total de la tecnología en las clínicas, hospitales, centros médicos, IPS y laboratorios que hoy son ajenos a ella por la falta de recursos económicos y con la que se salvarían en un número importante de vidas diarias, al igual que se mejoraría la atención y bienestar de todos los ciudadanos.</p>
                                            <ul class="list">
                                                <li><i class="fa fa-check"></i> Tecnología al servicio de la salud</li>
                                                <li><i class="fa fa-check"></i> Formatos de Historia Clínica para todas las especialidades</li>
                                                <li><i class="fa fa-check"></i> La Información de tus pacientes e historial clínico 100% seguro siempre disponible con múltiples capas de seguridad</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="department-right">
                                            <img src="https://via.placeholder.com/570x370" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Tab 5 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Departments -->

    <!-- Pricing Table -->
    <section id="planes" class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Le brindamos el mejor servicio a un precio razonable</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                        <p>Ni contratos, Ni cargos adicionales, Ni cláusulas de permanencia por un excelente servicio</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-first-aid"></i>
                            </div>
                            <h4 class="title">Plan Básico</h4>
                            <div class="price">
                                <p class="amount">$590.000<span>/ Anual</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Historia clínica personalizada</li>
                            <li><i class="icofont icofont-ui-check"></i>Manejo de sedes</li>
                            <li><i class="icofont icofont-ui-check"></i>Interoperabilidad</li>
                            <li><i class="icofont icofont-ui-check"></i>Espacio de almacenamiento</li>
                            <li><i class="icofont icofont-ui-check"></i>Registro de pacientes</li>
                            <li><i class="icofont icofont-ui-check"></i>Soporte 24/7</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Confirmación de citas</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Acceso desde cualquier equipo</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Agendamiento de citas online</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Adquiérelo</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-doctor"></i>
                            </div>
                            <h4 class="title">Plan Premium</h4>
                            <div class="price">
                                <p class="amount">$980.000<span>/ Anual</span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Historia clínica personalizada</li>
                            <li><i class="icofont icofont-ui-check"></i>Manejo de sedes</li>
                            <li><i class="icofont icofont-ui-check"></i>Interoperabilidad</li>
                            <li><i class="icofont icofont-ui-check"></i>Espacio de almacenamiento</li>
                            <li><i class="icofont icofont-ui-check"></i>Registro de pacientes</li>
                            <li><i class="icofont icofont-ui-check"></i>Soporte 24/7</li>
                            <li><i class="icofont icofont-ui-check"></i>Confirmación de citas</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso desde cualquier equipo</li>
                            <li><i class="icofont icofont-ui-check"></i>Agendamiento de citas online</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Adquiérelo</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont-hospital"></i>
                            </div>
                            <h4 class="title">Plan Instituciones</h4>
                            <div class="price">
                                <p class="amount" style="font-size: 20px;">Comuníquese con nosotros<span></span></p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li><i class="icofont icofont-ui-check"></i>Historia clínica personalizada</li>
                            <li><i class="icofont icofont-ui-check"></i>Manejo de sedes</li>
                            <li><i class="icofont icofont-ui-check"></i>Interoperabilidad</li>
                            <li><i class="icofont icofont-ui-check"></i>Espacio de almacenamiento</li>
                            <li class="cross"><i class="icofont icofont-ui-close"></i>Registro de pacientes</li>
                            <li><i class="icofont icofont-ui-check"></i>Soporte 24/7</li>
                            <li><i class="icofont icofont-ui-check"></i>Confirmación de citas</li>
                            <li><i class="icofont icofont-ui-check"></i>Acceso desde cualquier equipo</li>
                            <li><i class="icofont icofont-ui-check"></i>Agendamiento de citas online</li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Adquiérelo</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->

    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Medical News.</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
                        <div class="news-head">
                            <img src="https://via.placeholder.com/560x370" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">22 Aug, 2020</div>
                                <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                                <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1s">
                        <div class="news-head">
                            <img src="https://via.placeholder.com/560x370" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">15 Jul, 2020</div>
                                <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                                <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s">
                        <div class="news-head">
                            <img src="https://via.placeholder.com/560x370" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">05 Jan, 2020</div>
                                <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                                <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start clients -->
    <div class="clients overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="owl-carousel clients-slider">
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                        <div class="single-clients">
                            <img src="https://via.placeholder.com/200x100" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Ens clients -->

    <!-- Start Appointment -->
    <section class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                        <img src="<?= get_template_directory_uri() ?>/assets/img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <form class="form" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">Department</li>
                                            <li data-value="2" class="option">Cardiac Clinic</li>
                                            <li data-value="3" class="option">Neurology</li>
                                            <li data-value="4" class="option">Dentistry</li>
                                            <li data-value="5" class="option">Gastroenterology</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current">Doctor</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">Doctor</li>
                                            <li data-value="2" class="option">Dr. Akther Hossain</li>
                                            <li data-value="3" class="option">Dr. Dery Alex</li>
                                            <li data-value="4" class="option">Dr. Jovis Karon</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-4 col-12">
                                <div class="form-group">
                                    <div class="button">
                                        <button type="submit" class="btn">Book An Appointment</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-12">
                                <p>( We will be confirm by an Text Message )</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 ">
                    <div class="appointment-image">
                        <img src="https://via.placeholder.com/520x520" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment -->

    <!-- Start Newsletter Area -->
    <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.</p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form ">
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Your email address'" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Newsletter Area -->
<?php get_footer();