<?php
include("functions.php");
session_start();

if(!isset($_SESSION["useremail"]))
{
    echo"<script type='text/javascript'>window.location='index.php';</script>";
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>User dashboard</title>
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
    
    <div class="container text-dark">
        <h3>Add new case to database</h3>
    </div>

    <div class="row container">Enter your case detail</div>
    <div class="p-3 container">
        <form action="" class="form-group" method="post">
            <label  for="case_title" class="float-left">Case title</label>
            <input type="text" name="case_title" placeholder="Enter your case title here ....." class="form-control" id="case_title">

            <div class="row p-3">
                <div class="col-md">
                <label  for="case_" class="float-left">First name of respondent</label>
                <input type="text" name="first_name_over_whom" placeholder="Enter First Name of respondent ....." class="form-control" id="case_title">
                </div>
                <div class="col-md">
                <label  for="case_title" class="float-left">Second name of respondent Whom</label>
                <input type="text" name="second_name_over_whom" placeholder="Enter Second of respondent ....." class="form-control" id="case_title">
                </div>
            </div>

            <label  for="opponent_address" class="float-left">Respondent address</label>
            <textarea name="acquest_address" class="form-control" id="opponent_address" style="resize:none" placeholder="Enter your Respondent address ..." cols="15" rows="5"></textarea>
         
            <label  for="in_which_category" class="float-left">In Which Category</label>
            <select class="form-control" name="in_which_category" id="in_which_category">
               <option value="all" disabled>All Category</option>
               <option value="arbitration"  > Arbitration</option>
               <option value="armed-forces-tribunal"  > Armed Forces Tribunal</option>
               <option value="banking-finance"  > Banking & Finance</option>
               <option value="cheque-bounce"  > Cheque Bounce</option>
               <option value="child-custody"  > Child Custody</option>
               <option value="civil"  > Civil</option>
               <option value="consumer-court"  > Consumer Court</option>
               <option value="corporate"  > Corporate</option>
               <option value="criminal"  > Criminal</option>
               <option value="cybercrime"  > Cyber Crime</option>
               <option value="divorce"  > Divorce</option>
               <option value="documentation"  > Documentation</option>
               <option value="family"  > Family</option>
               <option value="gst"  > GST</option>
               <option value="immigration"  > Immigration</option>
               <option value="insurance"  > Insurance</option>
               <option value="intellectual-property-rights-ipr"  > Intellectual Property Rights (IPR)</option>
               <option value="international-law"  > International Law</option>
               <option value="labour-service"  > Labour & Service</option>
               <option value="landlord-tenant"  > Landlord & Tenant</option>
               <option value="medical-negligence"  > Medical Negligence</option>
               <option value="motor-accident"  > Motor Accident</option>
               <option value="muslim-law"  > Muslim Law</option>
               <option value="nri-services"  > NRI Services</option>
               <option value="property"  > Property</option>
               <option value="rti"  > R.T.I</option>
               <option value="recovery"  > Recovery</option>
               <option value="startup"  > Startup</option>
               <option value="supreme-court"  > Supreme Court</option>
               <option value="tax"  > Tax</option>
               <option value="trademark-copyright"  > Trademark & Copyright</option>
               <option value="wills-trusts"  > Wills & Trusts</option>
         </select>

         <label  for="opponent_mobile" class="float-left">Respondent mobile number</label>
         <input type="text" name="acquest_mobile" placeholder="Enter respondent mobile Number....." class="form-control" id="opponent_mobile">
         
         <label  for="opponent_email" class="float-left">Respondent e-mail id</label>
         <input type="text" name="acquest_email" placeholder="Enter respondent e-mail id....." class="form-control" id="opponent_mobile">

        <input type="submit" name='submit' value="Save Details and Go Next" class="btn btn-success form-control mt-2"> 
        </form>
    </div>
</center> 

<?php

if(isset($_POST["submit"]))
{
    $case_title = $_POST["case_title"];
    $first_name_over_whom = $_POST["first_name_over_whom"];
    $second_name_over_whom = $_POST["second_name_over_whom"];
    $in_which_category = $_POST["in_which_category"];
    $acquest_address = $_POST["acquest_address"];
    $acquest_mobile = $_POST["acquest_mobile"];
    $acquest_email = $_POST["acquest_email"];
    $session_email = $_SESSION["useremail"];

    $sql_insert = " INSERT INTO `case_detail`(`case_no`, `case_client_email`, `case_title`, `case_acquest_first_name`, `case_acquest_second_name`, `case_acquest_address`, `case_category`, `case_acquest_mobile`, `case_acquest_email`,`case_status`,`case_date_time`) VALUES (NULL,?,?,?,?,?,?,?,?,'current',NOW())";
    $add_case_inser_stmt = mysqli_stmt_init($con);
    if(mysqli_stmt_prepare($add_case_inser_stmt,$sql_insert))
    {
        mysqli_stmt_bind_param($add_case_inser_stmt,"ssssssss",$session_email,$case_title,$first_name_over_whom,$second_name_over_whom,$acquest_address,$in_which_category,$acquest_mobile,$acquest_email);
        if(mysqli_stmt_execute($add_case_inser_stmt)){
            echo "<script type='text/javascript'> swal('Success!', 'Your Case is successfully added to database ! ', 'success').then(function(){ window.location='hire_advocate_new_case.php?cat=$in_which_category&case_title=$case_title'}); </script>";
    }
    }
    else{
        echo "<script type='text/javascript'> swal('Fails!', 'Case Added Fail!', 'error'); </script>";
    }
  


}


?>


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
