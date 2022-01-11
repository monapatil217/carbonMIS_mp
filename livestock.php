<?php
require "php/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Live Stock</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <?php
    include 'header.php';
    ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex  justify-content-center" style="height: auto ; min-height: 100vh;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                <div class="col-md-12 col-lg-7  mb-2" data-aos-delay="200">
                    <div class="in-sec infoFont">
                        <h3>Live Stock</h3>
                            <ul style="margin-left: 10px;">
                                <li class="popupli"> It has been estimated that over 200 million tonnes of CO2 equivalents are released by Indian livestock each year. </li>
                                
                            </ul>
                    </div>
                </div>

                <div class="col-md-12 col-lg-5" data-aos-delay="200">
                    <div class="in-sec">
                        <h4 class="text-center mb-2">Live Stock</h4>
                        <form class="needs-validation" novalidate>
                            <h6 class="text-center mt-3"> Enter Number of Animals </h6>

                            <div class="row justify-content-center">
                                <div class="col-sm-5 col-lg-6">
                                    <div class="row">

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="indigenouscattle" placeholder="Indigenous Cattle">
                                                    <label for="indigenouscattle">Indigenous Cattle</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                         <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="crossbredcattle" placeholder="Cross-bred cattle">
                                                    <label for="crossbredcattle">Cross-Breed cattle</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="buffalo" placeholder="Buffalo">
                                                    <label for="buffalo">Buffalo</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="sheep" placeholder="Sheep">
                                                    <label for="sheep">Sheep</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="goat" placeholder="Goat">
                                                    <label for="goat">Goat</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5 col-lg-6">
                                    <div class="row">

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="horsesandponies" placeholder="Horses & Ponies">
                                                    <label for="horsesandponies">Horses & Ponies</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="donkeys" placeholder="Donkeys">
                                                    <label for="donkeys">Donkeys</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="camels" placeholder="Camels">
                                                    <label for="camels">Camels</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="pig" placeholder="Pig">
                                                    <label for="pig">Pig</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mt-3">
                                            <span class="form-floating">
                                                <div class="form-floating labelFont">
                                                    <input type="text" class="form-control" id="Poultry" placeholder="Poultry">
                                                    <label for="Poultry">Poultry</label>
                                                </div>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please provide a valid data.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-12 mb-3 mt-3 text-center">
                                    <button class="btn btn-primary " type="button" onclick="redirect();">Submit form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center" id="moreInfo">

                <div class=" col-lg-8 col-md-8 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                    <div class="popup-flex fade-to-img" onclick="showLiveStockInfo();">
                        <img class="reggot" id="popup-btn" src="img/horse.png" width="80" height="80">
                    </div>

                    <div id="popup-wrapper" class="popup-container">
                        <div class="popup-content">

                            <div class="row align-items-center justify-content-center">
                                <div id="popUpData" class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                </div>
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="btn-container">
                                        <a href="#" id="close" class="btn-gotit">Got It</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="js/liveStock.js"></script>
</body>

</html>