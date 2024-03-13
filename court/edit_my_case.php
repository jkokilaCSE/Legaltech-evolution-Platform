<?php
include("functions.php");
session_start();

if(!isset($_SESSION["useremail"]))
{
    echo"<script type='text/javascript'>window.location='index.php';</script>";
}

if(!isset($_GET["case_no"]))
{
    echo"<script type='text/javascript'>window.location='my_case.php';</script>";
}
?>



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
</head>
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
    <button href="javascript:void(0)" class="closebtn btn btn-light float-right" onclick="closeNav()">&times;</button>
            <img src="images/logo.png" alt="">
            <img src="images/one.png" style="padding:0px;margin:0px;" alt="">
            <a href="consult_now.php"><i class="fa fa-gavel "> </i>&nbsp;&nbsp; Consult Now</a>
            <a href="user_profile.php"><i class="fa fa-user">  </i> &nbsp;&nbsp;My Profile</a>
            <a href="my_case.php"><i class="fa fa-users">  </i >&nbsp;&nbsp;My Cases</a>
            <a href="my_documents.php"><i class="fas fa-book">  </i> &nbsp;&nbsp;My Documents</a>
            <a href="my_transaction.php"><i class="fa fa-globe">  </i> &nbsp;&nbsp;Transactions</a>
            <a href="faq.php"> <i class="fa fa-question"> </i>&nbsp;&nbsp; FAQ</a>
    </div>
    <div id="openbtn" class="text-dark">
         <button class="btn btn-dark btn-md" onclick="openNav()">&#9776;</button>
           Welcome : <?php echo $_SESSION["useremail"];?>
         <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarRes"><span class="pb-2 text-dark" style="font-size:20px;">&#9776;</span></button>
    </div>
    <div id="dashboard">
    <div id="navbar" class="navbar navbar-expand-md navbar-light sticty-top">
        <div id="navbarRes" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
               <center><li class="nav-item active"> <a href="user_dashboard.php" class="nav-link">Home</a> </li></center>
               <center><li class="nav-item active"> <a href="hire_lawer.php" class="nav-link">Hire Advocate Now</a> </li></center>
               <center><li class="nav-item active"> <a href="add_new_case.php" class="nav-link">Add new Case</a> </li></center>
               <center><li class="nav-item active"> <a href="chat_now.php" class="nav-link">Chat Now</a> </li></center>
               <center><li class="nav-item active"> <a href="contact.php" class="nav-link">Contact</a> </li></center>
               <center><li class="nav-item active"> <a href="logout.php" class="nav-link">Logout</a> </li></center>
            </ul>
        </div>
    </div>

        <h4 class="text-info border border-bottom">Edit Your Case</h4>

        <?php
            if(isset($_GET["case_no"]))
            {
                $case_no = $_GET["case_no"];
                $case_edit_select = "SELECT * FROM `case_detail` WHERE `case_no`='$case_no'";
                $case_edit_pass = mysqli_query($con,$case_edit_select);
                while($case_fetch_assoc=mysqli_fetch_assoc($case_edit_pass))
                {
                    $case_no = $case_fetch_assoc["case_no"];
                    $case_cnr_number = $case_fetch_assoc["case_cnr_number"];
                    $case_court_order_number = $case_fetch_assoc["case_court_order_number"];
                    $court_name = $case_fetch_assoc["court_name"];
                    $court_location = $case_fetch_assoc["court_location"];
                    $case_client_email = $case_fetch_assoc["case_client_email"];
                    $case_client_name = $case_fetch_assoc["case_client_name"];
                    $case_advocate_name = $case_fetch_assoc["case_advocate_name"];
                    $case_advocate_id = $case_fetch_assoc["case_advocate_id"];
                    $case_advocate_email = $case_fetch_assoc["case_advocate_email"];
                    $case_title = $case_fetch_assoc["case_title"];
                    $case_acquest_first_name = $case_fetch_assoc["case_acquest_first_name"];
                    $case_acquest_second_name = $case_fetch_assoc["case_acquest_second_name"];
                    $case_acquest_address = $case_fetch_assoc["case_acquest_address"];
                    $case_category = $case_fetch_assoc["case_category"];
                    $case_acquest_mobile = $case_fetch_assoc["case_acquest_mobile"];
                    $case_acquest_email = $case_fetch_assoc["case_acquest_email"];
                    $case_status = $case_fetch_assoc["case_status"];
                    $case_date_time = $case_fetch_assoc["case_date_time"];
                    $case_next_hearing = $case_fetch_assoc["case_next_hearing"];
                    $affiduvit = $case_fetch_assoc["affiduvit"];
                    $bail = $case_fetch_assoc["bail"];
                    $fir_number = $case_fetch_assoc["fir_number"];
                    $charge_sheet = $case_fetch_assoc["charge_sheet"];
                    $advocate_names = $case_fetch_assoc["case_advocate_name"];
                    $judgement = $case_fetch_assoc["judgement"];



                    ?>  

                    <div class="container p-1 text-left">
                        <form action="" method="post" class="form-group">
                            <div class="row text-left">
                                <h3 class="text-dark">Case Details</h3>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <label for="case_title">Case Title :</label>
                                    <input type="text" name="edit_case_title" value="<?php echo $case_title;  ?>" class="form-control" id="case_title">
                                </div>

                                <div class="col-md">
                                    <label for="edit_case_cnr_number">CNR Number :</label>
                                    <input type="text" name="edit_case_cnr_number" placeholder="Enter C N R Number Here ....." value="<?php echo $case_cnr_number;  ?>" class="form-control" id="edit_case_cnr_number">
                                </div>
                                
                            </div>


                            <div class="row mt-3">
                                <div class="col-md">
                                    <label for="edit_case_order_number">Case Order Number :</label>
                                    <input type="text" name="edit_case_order_number" placeholder="Enter Case Order Number ....." value="<?php echo $case_court_order_number;  ?>" class="form-control" id="edit_case_order_number">
                                </div>
                                <div class="col-md">
                                    <label for="edit_category">Case Category :</label>
                                    <input type="text" name="edit_category" placeholder="Enter Court Name Here ....." value="<?php echo $case_category;  ?>" class="form-control" id="edit_category">
                                </div>
                                
                            </div>


                            <div class="row mt-3">
                                <div class="col-md">
                                    <label for="edit_case_court_location">Case Court location :</label>
                                    <input type="text" name="edit_case_court_location" placeholder="Enter Case Order Number ....." value="<?php echo $court_location;  ?>" class="form-control" id="edit_case_court_location">
                                </div>

                                <div class="col-md">
                                    <label for="edit_court_name">Court Name :</label>
                                    <input type="text" name="edit_court_name" placeholder="Enter Court Name Here ....." value="<?php echo $court_name;  ?>" class="form-control" id="edit_court_name">
                                </div>
                              
                                
                            </div>


<hr>
                            <div class="row text-left">
                                <h3 class="text-dark">Responder Details</h3>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <label for="edit_case_acquest_first_name">Responder First Name :</label>
                                    <input type="text" name="edit_case_acquest_first_name" value="<?php echo $case_acquest_first_name;  ?>" class="form-control" id="edit_case_acquest_first_name">
                                </div>

                                <div class="col-md">
                                    <label for="edit_case_acquest_second_name">Responder Second Name :</label>
                                    <input type="text" name="edit_case_acquest_second_name" placeholder="Enter Second Name ....." value="<?php echo $case_acquest_second_name;  ?>" class="form-control" id="edit_case_acquest_second_name">
                                </div>
                                
                            </div>


                            <div class="row mt-3">
                                <div class="col-md">
                                    <label for="edit_responder_mobile">Responder Mobile :</label>
                                    <input type="text" name="edit_responder_mobile" placeholder="Enter Case Order Number ....." value="<?php echo $case_acquest_mobile;  ?>" class="form-control" id="edit_responder_mobile">
                                </div>
                                <div class="col-md">
                                    <label for="edit_responder_email">Responder Email :</label>
                                    <input type="text" name="edit_responder_email" placeholder="Enter Court Name Here ....." value="<?php echo $case_acquest_email;  ?>" class="form-control" id="edit_responder_email">
                                </div>
                                
                            </div>


                            <div class="row mt-3">
                                <label for="edit_case_responder_address">Responder Address</label>        
                                <textarea name="edit_case_responder_address" id="edit_case_responder_address" class="form-control m-2" cols="30" rows="4"><?php echo $case_acquest_address ; ?></textarea>
                            </div>
<hr>

                            <div class="row text-left">
                                <h3 class="text-dark">Advocate Details</h3>
                            </div>


                            <div class="row">
                                <div class="col-md">
                                    <label for="case_title">Advocate Name :</label>
                                    <input type="text" name="edit_case_title" value="<?php echo $advocate_names;  ?>" disabled class="form-control" id="case_title">
                                </div>

                                <div class="col-md">
                                    <label for="edit_case_cnr_number">Advocate Email :</label>
                                    <input type="text" name="edit_case_cnr_number" disabled placeholder="Enter C N R Number Here ....." value="<?php echo $case_advocate_email;  ?>" class="form-control" id="edit_case_cnr_number">
                                </div>
                                
                            </div>

                            <input type="submit" name="update_case" value="Update Case Details" class="btn btn-success form-control mt-4">


<hr>
                        </form>

                        <?php 

                        if(isset($_POST["update_case"]))
                        {
                            $edit_edit_case_title = $_POST["edit_case_title"];
                            $edit_case_cnr_number = $_POST["edit_case_cnr_number"];
                            $edit_case_order_number = $_POST["edit_case_order_number"];
                            $edit_edit_category = $_POST["edit_category"];
                            $edit_case_court_location = $_POST["edit_case_court_location"];
                            $edit_court_name = $_POST["edit_court_name"];
                            $edit_case_acquest_first_name = $_POST["edit_case_acquest_first_name"];
                            $edit_case_acquest_second_name = $_POST["edit_case_acquest_second_name"];
                            $edit_responder_mobile = $_POST["edit_responder_mobile"];
                            $edit_responder_email = $_POST["edit_responder_email"];
                            $edit_case_responder_address = $_POST["edit_case_responder_address"];

                            $update_sql_query = "UPDATE `case_detail` SET `case_cnr_number`='$edit_case_cnr_number',`case_court_order_number`='$edit_case_order_number',`court_name`='$edit_court_name',`court_location`='$edit_case_court_location',`case_title`='$edit_edit_case_title',`case_acquest_first_name`='$edit_case_acquest_first_name',`case_acquest_second_name`='$edit_case_acquest_second_name',`case_acquest_address`='$edit_case_responder_address',`case_category`='$edit_edit_category',`case_acquest_mobile`='$edit_responder_mobile',`case_acquest_email`='$edit_responder_email' WHERE `case_no`='$case_no'";                            
                            if(mysqli_query($con,$update_sql_query))
                            {
                                echo "<script type='text/javascript'> swal('Success!', 'Your Case is successfully added to database ! ', 'success').then(function(){ window.location='my_case.php'}); </script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'> swal('Faild!', 'Your Case Update is Faild ! ', 'error');</script>";
                            }


                        }


                        ?>

                    </div>




                    <?php



                }
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
<input type=email name=emailnews required class="form-control mt-2" placeholder="Enter your email id ........" id>
<input type=submit name=submitnews value=submit class="btn btn-success mt-3"> <br> <br>
</form>
</div>
<div id class="col-xl-3 col-lg-6 col-md-8 col-sm-10 p-3">
<h6 class=text-white>Follow us </h6>
<div id=social>
<a target=_block class=text-white href=#> <i class="fab fa-facebook"></i></a>
<a target=_block class=text-white href=#> <i class="fab fa-twitter-square"></i></a>
<a target=_block class=text-white href=#> <i class="fab fa-whatsapp-square"></i></a>
<a target=_block class=text-white href=#> <i class="fab fa-instagram"></i></a><span></div>
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
Telephone: 1234567890<br/>
Whatsapp: 1234567890
</p>
</div>
</div>
<hr class=bg-white>
<div class=row>
<div id class="col-md p-3">
<p> Copyrights &copy; 2019-<?php echo date("Y") ?>, ccm.com, its affiliates</p>
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
<script>AOS.init({duration:1100,});</script>