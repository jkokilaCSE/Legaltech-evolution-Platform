<?php
include("functions.php");
session_start();

if (!isset($_SESSION["useremail"])) {
    echo "<script type='text/javascript'>window.location='index.php';</script>";
}

?>


<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/icon" href="images/icon.png">
    <link rel=stylesheet href=css/aos.css />
    <script src=css/aos.js></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="icon" type="image/icon" href="image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>User Dashboard</title>
</head> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
    <!-- loader-->
    <link href="dashtreme-master/assets/css/pace.min.css" rel="stylesheet" />
    <script src="dashtreme-master/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="dashtreme-master/assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="dashtreme-master/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="dashtreme-master/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="dashtreme-master/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="dashtreme-master/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="dashtreme-master/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="dashtreme-master/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="dashtreme-master/assets/css/app-style.css" rel="stylesheet" />

</head>
<!-- 
<body>
    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "200px";
        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0";
        }
    </script>
    <center>
        <div id="dashboardfull" class="bg-white row">


            <div id="sidebar" class="sidenav bg-dark">
                <button href="javascript:void(0)" class="closebtn btn btn-light float-right"
                    onclick="closeNav()">&times;</button>
                <img src="images/logo.png" alt="">
                <img src="images/one.png" style="padding:0px;margin:0px;" alt="">
                <a href="consult_now.php"><i class="fa fa-gavel "> </i>&nbsp;&nbsp; Consult Now</a>
                <a href="user_profile.php"><i class="fa fa-user"> </i> &nbsp;&nbsp;My Profile</a>
                <a href="my_case.php"><i class="fa fa-users"> </i>&nbsp;&nbsp;My Cases</a>
                <a href="my_documents.php"><i class="fas fa-book"> </i> &nbsp;&nbsp;My Documents</a>
                <a href="my_transaction.php"><i class="fa fa-globe"> </i> &nbsp;&nbsp;Transactions</a>
                <a href="faq.php"> <i class="fa fa-question"> </i>&nbsp;&nbsp; FAQ</a>
            </div>
            <div id="openbtn" class="text-dark">
                <button class="btn btn-dark btn-md" onclick="openNav()">&#9776;</button>
                Welcome :
                <?php echo $_SESSION["useremail"]; ?>
                <button class="navbar-toggler bg-white" type="button" data-toggle="collapse"
                    data-target="#navbarRes"><span class="pb-2 text-dark"
                        style="font-size:20px;">&#9776;</span></button>
            </div>
            <div id="dashboard">
                <div id="navbar" class="navbar navbar-expand-md navbar-light sticty-top">
                    <div id="navbarRes" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <center>
                                <li class="nav-item active"> <a href="user_dashboard.php" class="nav-link">Home</a>
                                </li>
                            </center>
                            <center>
                                <li class="nav-item active"> <a href="hire_lawer.php" class="nav-link">Hire Advocate
                                        Now</a> </li>
                            </center>
                            <center>
                                <li class="nav-item active"> <a href="add_new_case.php" class="nav-link">Add new
                                        Case</a> </li>
                            </center>
                            <center>
                                <li class="nav-item active"> <a href="chat_now.php" class="nav-link">Chat Now</a> </li>
                            </center>
                            <center>
                                <li class="nav-item active"> <a href="contact.php" class="nav-link">Contact</a> </li>
                            </center>
                            <center>
                                <li class="nav-item active"> <a href="logout.php" class="nav-link">Logout</a> </li>
                            </center>
                        </ul>
                    </div>
                </div>


                <div class="row container p-3">
                    <div class="col-md">
                        <a href="my_transaction.php" class="btn btn-outline-info form-control">Current Payment</a>
                    </div>

                    <div class="col-md">
                        <a href="past_payment.php" class="btn btn-outline-info form-control">Past Payment</a>
                    </div>
                </div>
                <hr>


                <?php
                $session_email = $_SESSION["useremail"];
                $cnr_select = "SELECT * FROM `transaction` WHERE  `case_client_email`='$session_email' AND `status`='current' ";
                $cnr_result = mysqli_query($con, $cnr_select);
                while ($transaction_fetch = mysqli_fetch_assoc($cnr_result)) {
                    $transaction_sno = $transaction_fetch["sno"];
                    $transaction_case_client_email = $transaction_fetch["case_client_email"];
                    $transaction_payment_id = $transaction_fetch["payment_id"];
                    $transaction_cnr_number = $transaction_fetch["cnr_number"];
                    $transaction_amount = $transaction_fetch["amount"];
                    $transaction_status = $transaction_fetch["status"];

                    ?>


                    <div class="row container bg-light p-3">
                        <div class="col-md">
                            CNR :
                            <?php echo $transaction_cnr_number; ?>
                        </div>

                        <div class="col-md">
                            Amount <i class="fas fa-rupee-sign"></i> :
                            <?php echo $transaction_amount; ?>
                        </div>

                        <div class="col-md">
                            Status :
                            <?php echo $transaction_status; ?>
                        </div>

                        <div class="col-md">
                            <a href="pay_now_for_hearing.php?pay_cnr_num=<?php echo $transaction_cnr_number; ?>"
                                class="btn btn-outline-success form-control">Pay Now</a>
                        </div>

                    </div>


                    <?php

                }

                ?>


            </div>
        </div>
        </div>
        </div>

    </center>


    <div id=footer class="mt-1 p-4 bg-dark text-white col">
        <div class="row container">
            <div id class="col-xl-4 col-lg-6 col-md-8 col-sm-10 p-3">
                <h6 class=text-white>News Letter</h6>
                <form action=subscribe_email.php method=post class=form-group>
                    <input type=email name=emailnews required class="form-control mt-2"
                        placeholder="Enter your email id ........" id>
                    <input type=submit name=submitnews value=submit class="btn btn-success mt-3"> <br> <br>
                </form>
            </div>
            <div id class="col-xl-3 col-lg-6 col-md-8 col-sm-10 p-3">
                <h6 class=text-white>Follow us </h6>
                <div id=social>
                    <a target=_block class=text-white href=#> <i class="fab fa-facebook"></i></a>
                    <a target=_block class=text-white href=#> <i class="fab fa-twitter-square"></i></a>
                    <a target=_block class=text-white href=#> <i class="fab fa-whatsapp-square"></i></a>
                    <a target=_block class=text-white href=#> <i class="fab fa-instagram"></i></a><span>
                </div>
            </div>
            <div id class="col-xl-2 col-lg-6 col-md-8 col-sm-10 p-3">
                <h6 class=text-white> Get to Know Us </h6>
                <div class=ml-2>
                    <a target=_block href=about.php class=text-white>About Us </a> <br>
                    <a target=_block href=career.php class=text-white>Careers</a> <br>
                    <a target=_block href=contact.php class=text-white>Contact us</a> <br>
                    <a target=_block href=tems_conditions.php class=text-white>Terms</a> <br>
                    <a target=_block href=faq.php class=text-white>FAQ</a> <br>
                </div>
            </div>
            <div id class="col-xl-3 col-lg-6 col-md-8 col-sm-10 p-3">
                <h6 class=text-white>Registered Office Address: </h6>
                <p class=text-white>
                    Court Case Management System,<br>
                    </b> 192, National Highway,
                    New Delhi, Andaman<br>
                    India<br>
                    Telephone: 1234567890<br />
                    Whatsapp: 1234567890
                </p>
            </div>
        </div>
        <hr class=bg-white>
        <div class=row>
            <div id class="col-md p-3">
                <p> Copyrights &copy; 2019-
                    <?php echo date("Y") ?>, ccm.com, its affiliates
                </p>
            </div>
            <div id class="col-md p-3 text-center">
                <p> Designed by Praveen Kumar Vel</p>
            </div>
        </div>
    </div>

</body>

</html>



<div id=topbtn>
    <a href=#header> <img src=images/top.png alt=topicon></a>
</div>
<script>AOS.init({ duration: 1100, });</script> -->


<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="dashtreme-master/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">LegalTech Admin</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="user_dashboard.php">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="consult_now.php">
                        <i class="zmdi zmdi-invert-colors"></i> <span>Consult Now</span>
                    </a>
                </li>

                <li>
                    <a href="my_case.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>My Cases</span>
                    </a>
                </li>

                <li>
                    <a href="my_documents.php">
                        <i class="zmdi zmdi-grid"></i> <span>My Documents</span>
                    </a>
                </li>
                <li>
                    <a href="browse.php">
                        <i class="zmdi zmdi-grid"></i> <span>braille</span>
                    </a>
                </li>
                <li>
                    <a href="my_transaction.php">
                        <i class="zmdi zmdi-grid"></i> <span>Transactions</span>
                    </a>
                </li>
                <li>
                    <a href="add_new_case.php">
                        <i class="zmdi zmdi-grid"></i> <span>Add New Case</span>
                    </a>
                </li>

                <li>
                    <a href="hire_lawer.php">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Hire Advocate Now</span>
                        <small class="badge float-right badge-light">New</small>
                    </a>
                </li>

                <li>
                    <a href="profile.html">
                        <i class="zmdi zmdi-face"></i> <span>My Profile</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php" target="_blank">
                        <i class="zmdi zmdi-lock"></i> <span>Log Out</span>
                    </a>
                </li>

                <li>
                    <a href="register.html" target="_blank">
                        <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
                    </a>
                </li>

                <li class="sidebar-header">LABELS</li>
                <li><a href="faq.php"><i class="zmdi zmdi-coffee text-danger"></i> <span>FAQ</span></a>
                </li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Warning</span></a></li>
                <li><a href="chat_now.php"><i class="zmdi zmdi-share text-info"></i> <span>Communicate</span></a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                            <p class="user-subtitle">mccoy@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <div class="card mt-3">
                    <div class="card-content">

                        <div class="row container p-3">
                            <div class="col-md">
                                <a href="my_transaction.php" class="btn btn-outline-info form-control">Current
                                    Payment</a>
                            </div>

                            <div class="col-md">
                                <a href="past_payment.php" class="btn btn-outline-info form-control">Past Payment</a>
                            </div>
                        </div>
                        <hr>


                        <?php
                        $session_email = $_SESSION["useremail"];
                        $cnr_select = "SELECT * FROM `transaction` WHERE  `case_client_email`='$session_email' AND `status`='current' ";
                        $cnr_result = mysqli_query($con, $cnr_select);
                        while ($transaction_fetch = mysqli_fetch_assoc($cnr_result)) {
                            $transaction_sno = $transaction_fetch["sno"];
                            $transaction_case_client_email = $transaction_fetch["case_client_email"];
                            $transaction_payment_id = $transaction_fetch["payment_id"];
                            $transaction_cnr_number = $transaction_fetch["cnr_number"];
                            $transaction_amount = $transaction_fetch["amount"];
                            $transaction_status = $transaction_fetch["status"];

                            ?>


                            <div class="row container bg-light p-3">
                                <div class="col-md">
                                    CNR :
                                    <?php echo $transaction_cnr_number; ?>
                                </div>

                                <div class="col-md">
                                    Amount <i class="fas fa-rupee-sign"></i> :
                                    <?php echo $transaction_amount; ?>
                                </div>

                                <div class="col-md">
                                    Status :
                                    <?php echo $transaction_status; ?>
                                </div>

                                <div class="col-md">
                                    <a href="pay_now_for_hearing.php?pay_cnr_num=<?php echo $transaction_cnr_number; ?>"
                                        class="btn btn-outline-success form-control">Pay Now</a>
                                </div>

                            </div>


                            <?php

                        }

                        ?>

                        <!-- <div class="row row-group m-0">
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <h5 class="text-white mb-0">9526 <span class="float-right"><i
                                                class="fa fa-shopping-cart"></i></span></h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2%
                                            <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <h5 class="text-white mb-0">8323 <span class="float-right"><i
                                                class="fa fa-usd"></i></span></h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2%
                                            <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <h5 class="text-white mb-0">6200 <span class="float-right"><i
                                                class="fa fa-eye"></i></span></h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i
                                                class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-3 border-light">
                                <div class="card-body">
                                    <h5 class="text-white mb-0">5630 <span class="float-right"><i
                                                class="fa fa-envira"></i></span></h5>
                                    <div class="progress my-3" style="height:3px;">
                                        <div class="progress-bar" style="width:55%"></div>
                                    </div>
                                    <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i
                                                class="zmdi zmdi-long-arrow-up"></i></span></p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>


                <!-- Bootstrap core JavaScript-->
                <script src="dashtreme-master/dashtreme-master/assets/js/jquery.min.js"></script>
                <script src="dashtreme-master/assets/js/popper.min.js"></script>
                <script src="dashtreme-master/assets/js/bootstrap.min.js"></script>

                <!-- simplebar js -->
                <script src="dashtreme-master/assets/plugins/simplebar/js/simplebar.js"></script>
                <!-- sidebar-menu js -->
                <script src="dashtreme-master/assets/js/sidebar-menu.js"></script>
                <!-- loader scripts -->
                <script src="dashtreme-master/assets/js/jquery.loading-indicator.js"></script>
                <!-- Custom scripts -->
                <script src="dashtreme-master/assets/js/app-script.js"></script>
                <!-- Chart js -->

                <script src="dashtreme-master/assets/plugins/Chart.js/Chart.min.js"></script>

                <!-- Index js -->
                <script src="dashtreme-master/assets/js/index.js"></script>


</body>

</html>