<?php
require "php/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>MIS-Carbon</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/jbox/jBox.all.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
    #electricity {
        width: 400px;
        height: 300px;
    }
    </style>
</head>

<body> <?php
        include 'header.php';
        ?>
    <!-- ======= subHero Section ======= -->
    <section id="subHero" class="d-flex  justify-content-center " style="height: auto ; min-height: 100vh;">
        <div class="container position-relative " data-aos="fade-up" data-aos-delay="100">
         <input type="text" id="basicId" class="form-control" value="<?php echo $_SESSION["basicId"]; ?>" hidden
                disabled>
            <section class="section" id="about">
                <div class="container " id="">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12"
                            data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <img src="assets/img/carbongraphic1-removebg-preview.png"
                                class="rounded img-fluid d-block mx-auto" alt="App">
                        </div>
                        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                            <div class="textc">
                                <h5>Start Measuring your Carbon Emissions!</h5>
                            </div>
                            <div class="textc">
                                <p> Today carbon dioxide levels are the highest they’ve ever been in human history, and
                                    probably the highest in 3 million years. The concentration of carbon dioxide in
                                    Earth’s atmosphere is currently at 412 parts per million (ppm). This represents a 47
                                    percent increase since the beginning of the Industrial Age, when the concentration
                                    was near 280 ppm. To prevent the catastrophic effect of rising carbon emissions,
                                    countries are taking mitigation actions such reducing deforestation, using clean
                                    energy, investing in efficient carbon capture technology, etc. India too, is moving
                                    forward with the goal of reducing its carbon footprint by 30 to 35 percent. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row">
                <div id="" class="testimonials">
                    <div class="container" data-aos="fade-up">
                        <div class=" section-title">
                            <h2>DATA FILLED</h2>
                            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                        </div>
                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper" id="addDesign">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-title">
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="faq-list extraC">
                                <ul>
                                    <li data-aos="fade-up">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                            class="collapse" data-bs-target="#faq-list-1">Why focus first on carbon
                                            dioxide? <i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                            <p> Carbon dioxide is released in greater amounts and represents 50% of the
                                                warming attributed to greenhouse gases. As the major contributor of
                                                global warming, any serious environmental and economic program must
                                                first address this issue. The bulk of carbon dioxide comes from
                                                generating power and moving about in fossil fuel powered vehicles, the
                                                rest comes from agricultural and other activities. </p>
                                        </div>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                            data-bs-target="#faq-list-2" class="collapsed">Why do I need to know my
                                            carbon footprint and what does it mean <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                            <p> Your carbon footprint represents the impact you are having on climate
                                                change. Your footprint is defined as the total greenhouse gas emissions,
                                                expressed as carbon dioxide equivalent (CO2e). In the CoGo app, we call
                                                these 'carbon emissions' , measured in kilograms. These emissions come
                                                from your lifestyle choices, such as how you get around and what you
                                                eat. Knowing your carbon footprint helps you make changes to your
                                                lifestyle that will lower your impact. </p>
                                        </div>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="200">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                            data-bs-target="#faq-list-3" class="collapsed">I am only one person, can I
                                            really make that much of a difference <i
                                                class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                            <p> Yes you can! You are a part of a greater movement. In the app we show
                                                you the collective impact of the entire community, so you can see how
                                                all of our individual actions add up to make a huge difference.
                                                Collective action is absolutely necessary for us to help our planet, but
                                                collective action can't happen without individuals - that's you! </p>
                                        </div>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="300">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                            data-bs-target="#faq-list-4" class="collapsed">How does calculate my carbon
                                            footprint <i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                            <p> Your carbon footprint is the carbon emissions that are created by your
                                                consumption and lifestyle choices. A carbon footprint is measured in kgs
                                                of carbon dioxide equivalent (CO2e) and represents your personal
                                                contribution to the polluting gases that cause climate change. </p>
                                        </div>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="400">
                                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                            data-bs-target="#faq-list-5" class="collapsed">What is the solution for the
                                            greenhouse problem?<i class="bx bx-chevron-down icon-show"></i><i
                                                class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                            <p> The solution is a significant reduction of the greenhouse gases produced
                                                by mankind. This can be achieved by coordinating participation on
                                                government, industry, community and individual levels. Luckily, the
                                                technology to drive our economies emissions free is already available,
                                                and a shift over time to these alternate sources of energy is within our
                                                means. </p>
                                        </div>
                                    </li>
                                    <!--  -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6  mt-5">
                            <div>
                                <iframe
                                    src="https://www.google.co.in/maps/d/embed?mid=1GNIIOkKoqwk6Ov4SDpa6x93hdRmRmTd6"
                                    width="100%" height="500px" frameborder="0" style="border:0"
                                    allowfullscreen></iframe>
                                <!-- <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Frequently Asked Questions Section -->
            <!--Section: Contact v.2-->
            <section class="mb-1">
                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5 textc">Do you have any questions? Please do not hesitate
                    to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
                <div class="row align-items-center justify-content-center">
                    <!--Grid column-->
                    <div class="col-md-7 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Name">
                                        <label for="name" class="textc">Your Name</label>
                                    </div>
                                </div>
                                <!--Grid column-->
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder="email">
                                        <label for="email" class="textc">Your email</label>
                                    </div>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="subject" class="form-control"
                                            placeholder="Subject...">
                                        <label for="subject" class="textc">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2"
                                            class="form-control md-textarea"
                                            placeholder="Write message here..."></textarea>
                                        <label for="message" class="textc">Your message</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                        </form>
                        <div class="text-center text-md-left">
                            <a class="btn btn-primary">Send</a>
                        </div>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p class="textc" align="left">Kalpataru Point, 3rd and 4th floor,opp. PVR Theater ,Sion
                                    Circle, Mumbai, Maharashtra 400022</p>
                            </li>
                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p class="textc , bi bi-telephone-fill" align="left"> Call : 022- 24020781</p>
                            </li>
                            <li>
                                <p class="textc ,bi bi-envelope-fill " align="left"> mpcb@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
            </section>
            <!--Section: Contact v.2-->
    </section><!-- End Hero -->
    <!-- ***** Footer Start ***** --> <?php
                                        include 'footer.php';
                                        ?>
    <!-- End Footer -->
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="js/userDashboard.js"></script>
</body>

</html>