<?php
require "php/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Take Action</title>
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
    <!-- sectors icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <style>
#actionchart {
   width:auto;
  height:500px;
}
</style>
</head>

<body> <?php
    include 'header.php';
    ?>
  
    
    <!-- ======= subHero Section ======= -->
    <section id="subHero" class="d-flex  justify-content-center textc" style=" height: auto ; min-height: 100vh;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
         <input type="text" id="basicId" class="form-control" value="<?php echo $_SESSION["basicId"]; ?>" hidden disabled>
        <h3 class="text-center mt-5">Take Action</h3>
        <div class="row">
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
               
                        <div class="row">
                           <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos-delay="200">
                            <center><h4 class="text-center mt-3">Electricity Sector</h4></center>
  
                                <div id="democontainer">
                                    <p>
                                        How many used solar energy.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                </div>
                        </div> 
                        </div>

                        <div class="row">
                           <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos-delay="200">
                            <center><h4 class="text-center mb-2">transport Sector</h4></center>
  
                                <div id="democontainer">
                                    <p>
                                        How many used public vehicle.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                </div>
                        </div> 
                        </div>

                        <div class="row">
                           <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos-delay="200">
                            <center><h4 class="text-center mb-2">AFOLU Sector</h4></center>
                                <div id="democontainer">
                                    <p>
                                        How many used solar energy.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>    
                                </div>
                        </div> 
                        </div>

                        <div class="row">
                           <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos-delay="200">
                            <center><h4 class="text-center mb-2">Waste Sector</h4></center>
                                <div id="democontainer">
                                    <p>
                                        How many daily wastage.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                </div>
                        </div> 
                        </div>

                        <div class="row">
                           <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos-delay="200">
                            <center><h4 class="text-center mb-2">Industry Sector</h4></center>
                                <div id="democontainer">
                                    <p>
                                        what is the energy type of used your idustry.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                    <p>
                                        The new block will appear below this paragraph.
                                    </p>
                                </div>
                        </div> 
                        </div>
                </div>
            
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" id="actionGraphdiv"> 
            
                 <div class="row">
                    
                         <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3" data-aos-delay="200">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="rounded mt-n4 position-absolute iconAdmin">
                                    <center><i class="fa fa-bolt mt-2 " aria-hidden="true" style="font-size:36px;color:black"></i></center>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Electricity</p>
                                    <h4 class="mb-0">10200 tons/year</h4>
                                </div>
                            </div>
                           
                        </div>
                        </div>
                        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3" data-aos-delay="200">
                         <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="rounded mt-n4 position-absolute iconAdmin">
                                      <center><i class="fa fa-automobile mt-2 " style="font-size:36px;color:black"></i></center>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Transport</p>
                                    <h4 class="mb-0">10200 tons/year</h4>
                                </div>
                            </div>
                        </div>
                        </div>
                     </div>
                    
                <div class="row">
                        <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-3" data-aos-delay="200">
                           <div class="card">
                                <div class="card-header p-3 pt-2">
                                    <div class="bg-light bg-gradient rounded mt-n4 position-absolute iconAdmin">
                                        <center><i class="fa fa-tree mt-2 " aria-hidden="true" style="font-size:36px;color:black"></i></center>
                                        
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">AFOLU</p>
                                        <h4 class="mb-0">10200 tons/year</h4>
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  mt-3">
                            <div class="card">
                                <div class="card-header p-3 pt-2">
                                    <div class="bg-light bg-gradient rounded mt-n4 position-absolute iconAdmin">
                                        <center><i class="bi-trash mt-2 " style="font-size:36px;color:black"></i></center>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Waste</p>
                                        <h4 class="mb-0">10200 tons/year</h4>
                                    </div>
                                </div>
                            </div>
                                </div>
                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-3">
                                    <div class="card">
                                        <div class="card-header p-3 pt-2">
                                                    <div class="bg-light bg-gradient rounded mt-n4 position-absolute iconAdmin">
                                                        <center><i class="fa fa-industry mt-2 mb-2" aria-hidden="true" style="font-size:36px;color:black"></i></center>
                                                    </div>
                                                    <div class="text-end pt-1">
                                                        <p class="text-sm mb-0 text-capitalize">Industry</p>
                                                        <h4 class="mb-0">10200 tons/year</h4>
                                                    </div>
                                        </div>
                                    </div>
                                </div> 
                </div>
                        <div class="row">
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos-delay="200">
                                                        
                                            <div id="actionchart">    
                                            </div>
                                </div> 
                        </div>
                     </div>
                </div>
            </div>
      
    </section><!-- End Hero -->
   
    <!-- ***** Footer Start ***** --> <?php
    include 'footer.php';
    ?>
    <!-- End Footer -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
   
    </script>
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/jspdf.min.js"></script>
    <script src="assets/js/html2canvas.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendor/jbox/jBox.all.min.js"></script>
    <script src="assets/js/bootstrap-show-modal.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- Our JS Files -->
    <!-- <script src="js/energyElectricityModel.js"></script> -->
    <script src="js/actionPlan.js"></script>
  
    <script src="js/common.js"></script>
   
</body>

</html>