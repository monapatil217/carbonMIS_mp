<?php
require "php/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Action Plan</title>
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

    <link href="bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
    #intactionchart {
        width: 100%;
        height: 350px;
    }

    #intervchart {
        width: 60%;
        height: 350px;
        padding-left: 250px;
    }

    .center {
        margin: auto;
        width: 90%;
        /* border: 3px solid green; */
        padding: 20px;
    }

    #chartdiv1 {
        width: 100%;
        height: 500px;
    }

    /* #chartdiv {
  width: 100%;
  height: 500px;
} */
    #chartdiv2 {
        width: 60%;
        height: 500px;
        padding-left: 250px;

    }

    p1 {
        color: #73c2fb;
    }

    .nav {
        /* background-color: yellow;  */
        list-style-type: none;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    .nav li {
        display: inline-block;
        font-size: 20px;
        padding: 0px;
    }

    .padding {
        width: 100px;
        height: 80px;
        padding: 0px 0px 25px 0px;
    }

    /* p.ex1 {display:  inline-block;} */
    </style>
</head>

<body> <?php
        include 'header.php';
        ?>

    <!-- ======= subHero Section ======= -->
    <section id="subHero" class="d-flex  justify-content-center textc" style=" height: auto ; min-height: 100vh;">
        <div class="container position-relative mt-3" data-aos="fade-up" data-aos-delay="100">
            <input type="text" id="basicId" class="form-control" value="<?php echo $_SESSION["basicId"]; ?>" hidden
                disabled>
            <div class="container">
                <input type="text" id="cityName" class="form-control" value="<?php echo $_SESSION["cityName"]; ?>"
                    hidden disabled>
                <div class="row  mt-4">

                    <div class="col container vertical-scrollable">
                        <div class="card example-1 scrollbar-ripe-malinka policy">

                            <div class="card ">
                                <div class="card-body">
                                    <h3 class="text-center">2030 Interventions</h3>

                                    <div class="col-12 ">
                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="textc">
                                                    <h5>Electricity </h5><img src="assets/img/solarpol.png" width="50px"
                                                        height="40">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img
                                                        src="assets/img/indu.png" width="50px" height="40">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="assets/img/smarthm.png" width="50px" height="40">
                                                </div>
                                                <div class="textc">
                                                    <p> Renewable policy applied (25% of coal demand to be met with
                                                        solar)
                                                        Carbon capture Applied (25% of Carbon Emission Captured)</br>
                                                        Smart homes 20%
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 ">

                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="textc">
                                                    <h5>Transport </h5><img src="assets/img/evvehic1.png" width="50px"
                                                        height="40">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="assets/img/bus4.png" width="50px" height="40">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="assets/img/scrap.png" width="50px" height="40">
                                                </div>
                                                <div class="textc">
                                                    <p> Proposed EV policy</br>
                                                        2W 30%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        3w 25%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        4w 10% </br>
                                                        Fleet operators</br>
                                                        50% Buses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        city bus 50% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        msrtc 25%</br>
                                                        Govt Vehicles100%
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 ">

                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="textc">
                                                    <h5>AFOLU </h5><img src="assets/img/land2.png" width="50px"
                                                        height="40">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                        src="assets/img/livestock.png" width="50px" height="40">

                                                </div>
                                                <div class="textc">
                                                    <p>
                                                        Cropland 10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Forest 0% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Livestock 5%

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 ">

                                        <div class="card ">
                                            <div class="card-body">
                                                <div class="textc">
                                                    <h5>MSW</h5><img src="assets/img/waste.png" width="50px"
                                                        height="40">
                                                </div>
                                                <div class="textc">
                                                    <p>
                                                        45% od waste reaches landfill</br>
                                                        18% of wate reaches lanfill (All inert waste included)

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 ">
                                    <!-- remove for temparary add in future->"Industry" -->
                                        <!-- <div class="card ">
                                            <div class="card-body">
                                                <div class="textc">
                                                    <h5>Industries</h5><img src="assets/img/industry.png" width="50px"
                                                        height="40">
                                                </div>
                                                <div class="textc">
                                                    <p>
                                                        25% of coal demand to be met with PNG</br>
                                                        100% replacement of FO with PNG</br>
                                                        100% replacement ofwood with PNG
                                                    </p>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <!-- ///////////// -->
                                </div>
                            </div>
                        </div>
                        <!-- ////// -->
                    </div>


                    <div class="col container vertical-scrollable">
                        <div class="card example-1 scrollbar-ripe-malinka policy">
                            <div class="card ">
                                <div class="card-body">
                                    <h3 class="text-center">2050 Interventions</h3>
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="textc">
                                                        <h5>Electricity </h5><img src="assets/img/solarpol.png"
                                                            width="50px" height="40">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img
                                                            src="assets/img/indu.png" width="50px" height="40">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                            src="assets/img/smarthm.png" width="50px" height="40">
                                                    </div>
                                                    <div class="textc">
                                                        <p> Renewable policy applied (75% of coal demand to be met with
                                                            solar)
                                                            Carbon capture Applied (75% of Carbon Emission
                                                            Captured)</br>
                                                            Smart homes 50%
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="textc">
                                                        <h5>Transport </h5><img src="assets/img/evvehic1.png"
                                                            width="50px" height="40">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                            src="assets/img/bus4.png" width="50px" height="40">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                            src="assets/img/scrap.png" width="50px" height="40">

                                                    </div>
                                                    <div class="textc">
                                                        <p> Proposed EV policy :</br>
                                                            2w 60% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            3w 50% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            4w 40% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            Fleet operators 75%
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
                                                            Buses</br>
                                                            city bus 100% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            msrtc 50% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            Govt Vehicles 100%
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>
                                                            Scrappage Policy (15 years older veh scrapped) :</br>
                                                            Congestion tax (0.5% reduction on 2W and 4 W every
                                                            year)</br>
                                                            Non Motorised (0.5% reduction on 2W and 4 W every year)</br>
                                                            Subsidization (1% reduction on 2W and 4 W every year)</br>
                                                            Shared transport (1% reduction on 2W and 4 W every
                                                            year)</br>
                                                            Introduction of BS VII :</br>
                                                            3w 60% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            4w 35% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            LMVS 60% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            HCVs 75% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            Buses 50% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="w-100"></div>

                                        <div class="col-12 ">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="textc">
                                                        <h5>AFOLU </h5><img src="assets/img/land2.png" width="50px"
                                                            height="40">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
                                                            src="assets/img/livestock.png" width="50px" height="40">
                                                    </div>
                                                    <div class="textc">
                                                        <p> Cropland 60% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            Forest 0% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            Livestock 60% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 ">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="textc">
                                                        <h5>MSW </h5><img src="assets/img/waste.png" width="50px"
                                                            height="40">
                                                    </div>
                                                    <div class="textc">
                                                        <p> 20% of waste is treated by composting </br>
                                                            51% of waste is treated by composting (All biodegradable
                                                            waste
                                                            included)

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Force next columns to break to new line -->
                                        <div class="w-100"></div>

                                        <div class="col-12 ">
                                        <!-- remove for temparary add in future->"Industry" -->
                                            <!-- <div class="card ">
                                                <div class="card-body">
                                                    <div class="textc">
                                                        <h5>Industries </h5><img src="assets/img/industry.png"
                                                            width="50px" height="40">
                                                    </div>
                                                    <div class="textc">
                                                        <p> 75% of coal demand to be met with PNG </br>
                                                            100% replacement of FO with PNG </br>
                                                            100% replacement of wood with PNG </br>
                                                            100% replacement of Briquettes with PNG </br>
                                                            50% of LDO demand to be met with PNG</br>
                                                            50% of HSD demand to be met with PNG

                                                        </p>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="col-6 ">
                                        <div class="card ">
                                                </div>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Year Wise Total Emission -->
            <div class="row align-items-center justify-content-center">
                <p>
                <h3>
                    <center>Year Wise Total Emission</center>
                </h3>
                </P>
                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-3 mt-3" data-aos-delay="200">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <!-- <div class="rounded mt-n4 position-absolute iconAdmin">
                                        <center><i class="fa fa-bolt mt-2 " aria-hidden="true" style="font-size:26px;color:#e9ecef"></i></center>
                                    </div> -->
                            <P>
                            <h4>
                                <center>2022 Emission</center>
                            </h4>
                            </p>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">
                                    <!-- <center> Your Emission of 2022</center> -->
                                <h6 class="mb-0">
                                    <center>
                                        <!-- <h3> -->
                                        <p><h3 id="emi2022"></h3></p>
                                        <!-- <p1 id="emi2022"></p1> -->
                                        <!-- </h3> -->
                                         MtCO2e/year
                                    </center>
                                </h6>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-3 mt-3" data-aos-delay="200">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <!-- <div class="rounded mt-n4 position-absolute iconAdmin">
                                        <center><i class="fa fa-bolt mt-2 " aria-hidden="true" style="font-size:26px;color:#e9ecef"></i></center>
                                    </div> -->
                            <P>
                            <h4>
                                <center> Intervened 2030 Emission</h6>
                                </center>
                            </h4>
                            </p>
                            <div class="text-end pt-1">
                                <!-- <p class="text-sm mb-0 text-capitalize">Emission of 2030 using Take Action</p> -->
                                <h6 class="mb-0">
                                    <center>
                                       <!-- <h3> -->
                                        <p><h3 id="emi2030"></h3></p>
                                        <!-- <p1  id="emi2030"></p1> -->
                                       <!-- </h3> -->
                                        MtCO2e/year
                                    </center>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-3 mt-3" data-aos-delay="200">
                    <div class="card">
                        <div class="card-header p-3 pt-2">

                            <P>
                            <h4>
                                <center> Intervened 2050 Emission</center>
                            </h4>
                            </p>
                            <div class="text-end pt-1">
                                <!-- <p class="text-sm mb-0 text-capitalize">Emission of 2050 using Take Action</p> -->
                                <h6 class="mb-0">
                                    <center>
                                        <!-- <h3> -->
                                            <p><h3 id="emi2050"></h3></p>
                                             <!-- <p1 id="emi2050"></p1> -->
                                        <!-- </h3>  -->
                                        MtCO2e/year
                                    </center>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </diV>
            <!-- Year Wise Total Emission -->
            <!-- ////// -->
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 pt-3" data-aos-delay="200">
                    <div id="intactionchart">
                    </div>
                </div>
            </div>
            <!-- ////// -->
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 pt-3" data-aos-delay="200">


                    <div class="row align-items-center justify-content-center">
                        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3 " data-aos-delay="200">
                        </div>
                        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3 " data-aos-delay="200">
                            <!-- <div class="row">
                          <h4 id="numberOfTree">After 2050 Equivalent to &nbsp;&nbsp;</h4><img src="assets/img/tt3.png"  width="100px" height="80">
                            </div> -->
                            <ul class="nav">
                                <li>
                                   <h2 id="numberOfTree">Equivalent to &nbsp;</h2> </li>
                                    <li><h2> &nbsp;Million</h2> </li>
                                <!-- </li> -->
                                <li><img src="assets/img/tt3.png" width="100px" height="80" class="padding"></li>

                            </ul>
                            <!-- <h2 id="numberOfTree"></h2> -->
                            <!-- <img src="assets/img/tt3.png"  width="100px" height="80"> -->

                        </div>
                    </div>

                    <div id="intervchart">
                    </div>

                </div>

            </div>

            <!-- ////sector wise graph -->
            <div class="row align-items-center justify-content-center">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 " data-aos-delay="200">

                    <div id="Contact" class="tabcontent">
                        <div class="row mt-3 justify-content-center">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="text-white"> Sectoral Carbon Emissions(MtCO2e/year)</h3>
                                </div>
                                <div class="col-3 form-group col-md-3">
                                    <select class="form-control" id="sectionType" onchange="chartdiv2();">
                                        <option disabled selected>Select Sector</option>
                                        <option value="Electricity">Electricity</option>
                                        <option value="Transport">Transport</option>
                                        <option value="WasteWater">WasteWater</option>
                                        <option value="AFOLU">AFOLU</option>
                                        <!-- <option value="energy">Industry</option> -->
                                    </select>
                                </div>

                            </div>
                        </div>
                        <!-- <div id="secChartDiv">
                                <div id="secEmiChart"></div>
                            </div> -->
                        <!-- <div id="chartdiv"></div> -->
                        <!-- <div id="chartdiv1"></div> -->
                        <div id="SectoralChart">
                            <div id="chartdiv2"></div>
                        </div>

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
    <script src="js/takeAction.js"></script>
    <!-- <script src="js/Demolinegraph.js"></script> -->
    <!-- <script src="js/induGraph.js"></script> -->

    <!-- <script src="js/combinegraph.js"></script> -->
    <script src="js/common.js"></script>
    <script>
    </script>

    <script src="bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="jquery-1.11.1.min.js"></script>


    <script type="text/javascript">
    $.fn.extend({
        treed: function(o) {

            var openedClass = 'glyphicon-minus-sign';
            var closedClass = 'glyphicon-plus-sign';

            if (typeof o != 'undefined') {
                if (typeof o.openedClass != 'undefined') {
                    openedClass = o.openedClass;
                }
                if (typeof o.closedClass != 'undefined') {
                    closedClass = o.closedClass;
                }
            };

            //initialize each of the top levels
            var tree = $(this);
            tree.addClass("tree");
            tree.find('li').has("ul").each(function() {
                var branch = $(this); //li with children ul
                branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
                branch.addClass('branch');
                branch.on('click', function(e) {
                    if (this == e.target) {
                        var icon = $(this).children('i:first');
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
            });
            //fire event from the dynamically added icon
            tree.find('.branch .indicator').each(function() {
                $(this).on('click', function() {
                    $(this).closest('li').click();
                });
            });
            //fire event to open branch if the li contains an anchor instead of text
            tree.find('.branch>a').each(function() {
                $(this).on('click', function(e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
            //fire event to open branch if the li contains a button instead of text
            tree.find('.branch>button').each(function() {
                $(this).on('click', function(e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
        }
    });

    //Initialization of treeviews

    $('#tree1').treed();

    $('#tree2').treed({
        openedClass: 'glyphicon-folder-open',
        closedClass: 'glyphicon-folder-close'
    });

    $('#tree3').treed({
        openedClass: 'glyphicon-chevron-right',
        closedClass: 'glyphicon-chevron-down'
    });
    </script>

</body>

</html>