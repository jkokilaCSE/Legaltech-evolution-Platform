<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    //$html = "<p>Your payment was successful</p>
      //       <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

      $payment_id = $_POST['razorpay_payment_id'];
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

//echo $html;

?>



<?php
include("functions.php");

if(!isset($_SESSION["useremail"]))
{
    echo"<script type='text/javascript'>window.location='index.php';</script>";
}


if(!isset( $_POST['razorpay_payment_id']))
{
    echo"<script type='text/javascript'>window.location='user_dashboard.php';</script>";
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
    
    <div class="container bg-light p-3 mt-1 text-left">
        <?php //echo $payment_id; ?>
        <?php

            if(isset($_GET["cnr_number"]))
            {
                $cnr_number = $_GET["cnr_number"];
                $verify_case_detail_select_sql = "SELECT * FROM `case_detail` WHERE `case_cnr_number`='$cnr_number'";
                $verify_case_detail_mysqli_query = mysqli_query($con,$verify_case_detail_select_sql);
                while($verify_case_detail_mysqli_fetch_assoc = mysqli_fetch_assoc($verify_case_detail_mysqli_query))
                {
                    $case_advocate_id = $verify_case_detail_mysqli_fetch_assoc["case_advocate_id"];
                    //echo $case_advocate_id;
                }

            }

            if(isset($case_advocate_id))
            {
                $advocate_select = "SELECT * FROM `advocate_detail` WHERE `sno`='$case_advocate_id'";
                $advocate_select_mysqli_query = mysqli_query($con,$advocate_select);
                while($advocate_select_mysqli_fetch_assoc = mysqli_fetch_assoc($advocate_select_mysqli_query))
                {
                    $advocate_name = $advocate_select_mysqli_fetch_assoc["name"];
                    $advocate_mobile = $advocate_select_mysqli_fetch_assoc["mobile"];
                    $advocate_email = $advocate_select_mysqli_fetch_assoc["email"];
                    $advocate_category = $advocate_select_mysqli_fetch_assoc["category"];
                    $advocate_location = $advocate_select_mysqli_fetch_assoc["location"];
                }
            }

            if(isset($_GET["cnr_number"]))
            {
                $transaction_select = "SELECT * FROM `transaction` WHERE `advocate_id`='$case_advocate_id' AND `cnr_number`='$cnr_number'";
                $transaction_mysqli_query = mysqli_query($con,$transaction_select);
                while($transaction_mysqli_fetch_assoc = mysqli_fetch_assoc($transaction_mysqli_query))
                {
                    $transaction_case_sno = $transaction_mysqli_fetch_assoc['sno'];
                    $transaction_case_client_email = $transaction_mysqli_fetch_assoc['case_client_email'];
                    $transaction_case_payment_id = $transaction_mysqli_fetch_assoc['payment_id'];
                    $transaction_case_amount = $transaction_mysqli_fetch_assoc['amount'];
                    $transaction_case_date_time = $transaction_mysqli_fetch_assoc['date_time'];

                }

            }


            $update_database = "UPDATE `transaction` SET `payment_id`='$payment_id',`status`='completed' WHERE `sno`='$transaction_case_sno'";
            if(mysqli_query($con,$update_database))
            {
                
            }


        ?>
        <h4 class="">Your Transaction Will Be Success</h4>
        <p class="text-secondary">your transaction to advocate name will be success</p>

        <div class="row p-2">
            <div class="col-md">CNR Number : <?php echo $_GET["cnr_number"]; ?></div>
            <div class="col-md">Advocate Id : ADVOC_<?php echo $case_advocate_id; ?></div>
            <div class="col-md">Time : <?php echo $transaction_case_date_time ; ?></div>
        </div>

        
        <div class="row p-2">
            <div class="col-md">Name  : <?php echo $advocate_name; ?></div>
            <div class="col-md">Payement Id : <?php echo $payment_id; ?></div>
            <div class="col-md">Category : <?php echo $advocate_category ; ?></div>
        </div>

        <div class="row p-2">
            <div class="col-md"> <a href="print_invoice.php?transaction_id=<?php echo $transaction_case_sno; ?>&cnr_number=<?php echo $cnr_number; ?>" class="btn btn-dark">Print Invoice</a> </div>
            <div class="col-md"> <a href="user_dashboard.php" class="btn btn-success">Go Back</a> </div>
        </div>




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
