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
    
    <div class="bg-light">
        <h4 class="text-dark">My Cases</h4>
    </div>

    <div class="container row p-1">
        <div class="col m-2 ">
        <a href="my_case.php" class='nav-link btn btn-outline-dark'>
            My Current Case
         </a>
        </div>
        
        <div class="col m-2 ">
        <a href="my_case_completed.php" class='nav-link btn btn-outline-dark'>
            My Completed Case
         </a>
        </div>

    </div>

<?php


if(isset($_SESSION["useremail"]))
{
    $session_email = $_SESSION["useremail"];
    $case_select = "SELECT * FROM `case_detail` WHERE `case_client_email`='$session_email'  AND `case_status`='completed'";
    $case_result = mysqli_query($con,$case_select);
    while($fetch_case=mysqli_fetch_assoc($case_result))
    {
        $case_no = $fetch_case["case_no"];
        $case_title = $fetch_case["case_title"];
        $case_client_name = $fetch_case["case_client_name"];
        $case_acquest_first_name = $fetch_case["case_acquest_first_name"];
        $case_category = $fetch_case["case_category"];
        $case_date_time = $fetch_case["case_date_time"];
        $case_next_hearing = $fetch_case["case_next_hearing"];
        $case_status = $fetch_case["case_status"];
        ?>
    


    <div class="container border border-info p-3">
        <div class="row">
            <div class="col-md">
                <h3 class="text-dark text-left text-md-center"><?php echo $case_title ; ?></h3>
            </div>
            
            <div class="col-md">
                <h3 class="text-dark text-center "> <i class="fas fa-eye text-success"></i> <?php echo $case_status ; ?></h3>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md text-left">
                <h4 class="text-dark">Case no : <?php echo $case_no ; ?></h4>
            </div>

        
            <div class="col-md text-left">
                <h4 class="text-dark"> <i class="fa fa-user" aria-hidden="true"></i>   <?php echo $case_client_name ; ?> </h4>
            </div>

            
            <div class="col-md text-left">
            <h4 class="text-dark">  <i class="fa fa-user" aria-hidden="true"></i> <?php echo $case_acquest_first_name ; ?></h4>
            </div>
            
        </div>


        <div class="row mt-2 mb-2">
            <div class="col-md text-left">
               <h6 class="text-dark"> <?php echo $case_date_time ; ?> </h6>
            </div>

            
            <div class="col-md text-left">
                <h6 class="text-dark"> Next Hearing  : <?php echo $case_next_hearing ; ?> </h6>
            </div>

            <div class="col-md text-left">
            <h6 class="text-dark"> Category : <?php echo $case_category ; ?> </h6>

            </div>

        </div>

        <div class="row">        
            <div class="col-md text-left">
                <a href="edit_my_case.php" class="btn btn-info form-control">Edit Case</a>
            </div>

            
            <div class="col-md text-left">
                <a href="#" class="btn btn-success form-control">Mark as Completed</a>
            </div>
            
        </div>



    </div>
    
    </div>
    </div>
<?php


} 


}


?>
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
