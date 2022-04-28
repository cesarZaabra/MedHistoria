<?php
/**
 * Template Name: Appointment
 */
get_header();
?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Get Your Appointment</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Appointment -->
    <section class="appointment single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="appointment-inner">
                        <div class="title">
                            <h3>Book your appointment</h3>
                            <p>We will confirm your appointment within 2 hours</p>
                        </div>
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
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="button">
                                            <button type="submit" class="btn">Book An Appointment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 ">
                    <div class="work-hour">
                        <h3>Working Hours</h3>
                        <ul class="time-sidual">
                            <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                            <li class="day">Saturday <span>9.00-18.30</span></li>
                            <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                            <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                            <li class="day">Saturday <span>9.00-18.30</span></li>
                            <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                            <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                            <li class="day">Saturday <span>9.00-18.30</span></li>
                            <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/End Appointment -->
<?php get_footer();