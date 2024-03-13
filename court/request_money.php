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
    <title>Advocate Dashboard</title>
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
            <img src="images/advocate_icon.png" style="padding:0px;margin:0px;" alt="">
            <a href="lawyer_chat_now.php"><i class="fa fa-envelope"> </i>&nbsp;&nbsp; Chat_now.php </a>
            <a href="user_profile.php"><i class="fa fa-user">  </i> &nbsp;&nbsp;My Profile</a>
            <a href="lawyer_my_case.php"><i class="fa fa-users">  </i >&nbsp;&nbsp;My Cases</a>
            <a href="lawyer_my_documents.php"><i class="fas fa-book">  </i> &nbsp;&nbsp;Case Evidence</a>
            <a href="request_money.php"><i class="fa fa-globe">  </i> &nbsp;&nbsp;Request Money</a>
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
               <center><li class="nav-item active"> <a href="hire_lawer.php" class="nav-link">My petitioner</a> </li></center>
               <center><li class="nav-item active"> <a href="add_new_case.php" class="nav-link">Add new Case</a> </li></center>
               <center><li class="nav-item active"> <a href="chat_now.php" class="nav-link">Chat Now</a> </li></center>
               <center><li class="nav-item active"> <a href="contact.php" class="nav-link">Contact</a> </li></center>
               <center><li class="nav-item active"> <a href="logout.php" class="nav-link">Logout</a> </li></center>
            </ul>
        </div>
    </div>


    <div class="row container p-3">
    <div class="col-md">
            <a href="my_transaction.php" class="btn btn-outline-info form-control">Request Money</a>
        </div>

        <div class="col-md">
            <a href="past_payment.php" class="btn btn-outline-info form-control">My Transactions</a>
        </div>
    </div>        
    <hr>
    
    <div class="container bg-light p-3">
        <h3 class="text-dark">Request money for Nnext Hearing :</h3>
        <form action="" method="post">
            <div class="row">
                <div class="col-md">
                    <select name="cnr_number" class="form-control"id="">
                        <option value="MHAU023468789999">MHAU023468789999</option>
                        <option value="MAB109290192">MAB109290192</option>
                        <option value="MAB109290193">MAB109290193</option>
                    </select>
                </div>
                <div class="col-md">
                    <input type="text" name="amount" class="form-control" placeholder="Enter Amount ( 100Rs )" id="">
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <input type="submit" value="Request Money" name="submit_request" class="btn btn-success form-control mt-2">
                </div>
            </div>

        </form>

        <?php 
            if(isset($_POST["submit_request"]))
            {
                $cnr_number = $_POST["cnr_number"];
                $amount = $_POST["amount"];

                $select_advocate_id = "SELECT `case_client_email`,`case_advocate_id` FROM `case_detail` WHERE `case_cnr_number`='$cnr_number'";
                $select_advocate_mysqli_query = mysqli_query($con,$select_advocate_id);
                while($mysqli_fetch_assoc = mysqli_fetch_assoc($select_advocate_mysqli_query))
                {
                    $select_advocate_id_fetch = $mysqli_fetch_assoc["case_advocate_id"];
                    $select_case_client_email = $mysqli_fetch_assoc["case_client_email"];
                }
                
                $insert_transaction_page = "INSERT INTO `transaction`(`sno`, `case_client_email`, `advocate_id`, `payment_id`, `cnr_number`, `amount`, `status`, `date_time`) VALUES (NULL,'$select_case_client_email','$select_advocate_id_fetch','','$cnr_number','$amount','current',NOW())";
                if(mysqli_query($con,$insert_transaction_page))
                {
                    echo "<script type='text/javascript'> swal('Request Submited!', 'your money Request is success', 'success'); </script>";
                }
                else{
                    echo "<script type='text/javascript'> swal('Request Submited Faild', 'your money Request is faild', 'error'); </script>";

                }
            }
        ?>
    </div>

   

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