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
    <link href="assets/css/template-rangebar.css" rel="stylesheet">
    <link href="assets/css/rangebar.css" rel="stylesheet">
    <link href="assets/css/datepeaker.css" rel="stylesheet">
    <!-- sectors icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- /////toggal purpose -->.
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css"> -->


    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css">

    <link rel="stylesheet" type="text/css" href="slideControl.css" />
    <style>
    #actionchart {
        width: auto;
        height: 500px;
    }

    #datepicker {
        background-color: #D3D3D3;
        width: 100px;
    }

    .bgcl {
        background-color: #F0F0F0;
    }
    </style>
</head>

<body> <?php
        include 'header.php';
        ?>


    <!-- ======= subHero Section ======= -->
    <section id="subHero" class="d-flex  justify-content-center textc" style=" height: auto ; min-height: 100vh;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <input type="text" id="basicId" class="form-control" value="<?php echo $_SESSION["basicId"]; ?>" hidden
                disabled>

            <h3 class="text-center mt-4">Take Action</h3>
            <div class="row">
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2" data-aos-delay="200">

                </div>
            </div>
            <div class="row actionPlanText1">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ml-3" id="actionGraphdiv">
                    <div class="row actionPlanText">
                        <div class="row">

                            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3" data-aos-delay="200">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="rounded mt-n4 position-absolute iconAdmin">
                                            <center><i class="fa fa-bolt mt-2 " aria-hidden="true"
                                                    style="font-size:26px;color:#e9ecef"></i></center>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Electricity</p>
                                            <h6 class="mb-0 mt-2" id="Electricity"></h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-3" data-aos-delay="200">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="rounded mt-n4 position-absolute iconAdmin">
                                            <center><i class="fa fa-automobile mt-2 "
                                                    style="font-size:26px;color:#e9ecef"></i></center>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Transport</p>
                                            <h6 class="mb-0 mt-2" id="Transport"></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-3" data-aos-delay="200">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="rounded mt-n4 position-absolute iconAdmin">
                                            <center><i class="fa fa-tree mt-2 " aria-hidden="true"
                                                    style="font-size:26px;color:#e9ecef"></i></center>

                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">AFOLU</p>
                                            <h6 class="mb-0 mt-3" id="AFOLU"></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4  mt-3">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="rounded mt-n4 position-absolute iconAdmin">
                                            <center><i class="bi-trash mt-2 " style="font-size:26px;color:#e9ecef"></i>
                                            </center>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Waste</p>
                                            <h6 class="mb-0 mt-3" id="WasteWater"> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mt-3">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="rounded mt-n4 position-absolute iconAdmin">
                                            <center><i class="fa fa-industry mt-2 mb-3" aria-hidden="true"
                                                    style="font-size:26px;color:#e9ecef"></i></center>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">energy</p>
                                            <h6 class="mb-0 mt-3" id="energy"> </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos-delay="200">

                                <div id="chartName">                             
                                <div id="actionchart"> </div> 
                                                        
                                 </div>
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-1 ">
                </div> -->

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                    <!-- <div class="card example-1 scrollbar-ripe-malinka"> -->
                    <!-- <div class="card-header p-3 pt-2"> -->

                    <div class="row ">
                        <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 " data-aos-delay="200">
                            <!-- //// -->
                            <div class="accordion " id="accordionExample">
                                <div class="accordion-item bgcl">
                                    <h2e4 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Electricity
                                        </button>
                                    </h2>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Residential
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Commercial
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Agriculture
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Industrial
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Municipal
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Other
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <hr> -->
                                <div class="accordion-item bgcl">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Transport
                                        </button>
                                    </h2>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingTrans">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTrans" aria-expanded="true"
                                                aria-controls="collapseTrans">
                                                <!-- Transport -->
                                            </button>
                                        </h2>
                                        <div id="collapseTrans" class="accordion-collapse collapse show"
                                            aria-labelledby="headingTrans" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bgcl">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            AFOLU
                                        </button>
                                    </h2>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingAFOLU">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseAFOLU" aria-expanded="true"
                                                aria-controls="collapseAFOLU">
                                                <!-- AFOLU -->
                                            </button>
                                        </h2>
                                        <div id="collapseAFOLU" class="accordion-collapse collapse show"
                                            aria-labelledby="headingAFOLU" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bgcl">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Waste
                                        </button>
                                    </h2>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingWasteSolid">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseWasteSolid" aria-expanded="true"
                                                aria-controls="collapseWasteSolid">
                                                Solid Waste
                                            </button>
                                        </h2>
                                        <div id="collapseWasteSolid" class="accordion-collapse collapse show"
                                            aria-labelledby="headingWasteSolid" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingWasteWater">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseWasteWater" aria-expanded="true"
                                                aria-controls="collapseWasteWater">
                                                Waste Water
                                            </button>
                                        </h2>
                                        <div id="collapseWasteWater" class="accordion-collapse collapse show"
                                            aria-labelledby="headingWasteWater" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item bgcl">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            Industry
                                        </button>
                                    </h2>
                                    <div class="accordion-item bgcl">
                                        <h2 class="accordion-header" id="headingIndustryEnergy">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseIndustryEnergy" aria-expanded="true"
                                                aria-controls="collapseIndustryEnergy">
                                                Industry Energy
                                            </button>
                                        </h2>
                                        <div id="collapseIndustryEnergy" class="accordion-collapse collapse show"
                                            aria-labelledby="headingIndustryEnergy" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>1. Policy 1 </p>

                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP1"
                                                            placeholder="select year" />

                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>
                                                            2. Policy 2</P>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP2"
                                                            placeholder="select year" />

                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p> 3. Policy 3
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP3"
                                                            placeholder="select year" />
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                        <p>4. Policy 4</p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <input type="text" id="datepicker" name="eledtP4"
                                                            placeholder="select year" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="row ">
                                                    <div
                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                                        <button class="btn btn-primary " type="button"
                                                            onclick="eleAction();">SAVE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <br>
                                <div class="row ">                               
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mb-3 text-center">
                                            <button class="btn btn-primary " type="button"
                                                onclick="postAction();">SAVE</button>
                                        </div>
                                        -->
                                </div>
                                <!-- ///// -->
                                <!-- </div> -->
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
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

    <!-- ///datatimepeaker -->
    <script src="assets/js/jquery.ui.js"></script>
    <!-- toggle btn -->
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <!-- <script async src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script> -->
    <!-- <script type='text/javascript' src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script> -->
    <!-- <script src="js/colored.slider.js"></script> -->
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <!-- Our JS Files -->
    <!-- <script src="js/energyElectricityModel.js"></script> -->
    <script src="js/actionPlan.js"></script>

    <script src="js/common.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
            '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    //         $(function () {
    //         $('[data-toggle="tooltip"]').tooltip()

    // }
    </script>

    <script type="text/javascript">

    </script>

</body>

</html>