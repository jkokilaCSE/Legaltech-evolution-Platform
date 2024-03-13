<?php
include("functions.php");
session_start();

if(!isset($_SESSION["useremail"]))
{
    echo"<script type='text/javascript'>window.location='user_login.php';</script>";
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

    <div id="login" style="background:url('images/bann1.jpg');background-size:cover;"  class="container jumbotron  mt-5">
        <h1 class="text-white text-center">HIRE TOP RATED ADVOCATE IN YOUR CITY</h1>
        <form action="" method="post" class="form-group">
        <select class="form-control w-50 float-left selectForm" name="cat">
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


<select class="form-control w-50 selectForm" name="city">
        <option value="select" disabled>Select your state's capital...</option>
        <option value="agartala">Agartala</option>
        <option value="aizawi">Aizawi</option>
        <option value="amaravati">Amaravati</option>
        <option value="bangalore">Bangalore</option>
        <option value="bhopal">Bhopal</option>
        <option value="bhuvaneshwar">Bhuvaneshwar</option>
        <option value="chandigarh">Chandigarh</option>
        <option value="chennai">Chennai</option>
        <option value="dehradun">Dehradun</option>
        <option value="dispur">Dispur</option>
        <option value="gandhinagar">Gandhinagar</option>
        <option value="gangtok">Gangtok</option>
        <option value="hyderabad">Hyderabad</option>
        <option value="imphal">Imphal</option>
        <option value="itanagar">Itanagar</option>
        <option value="jaipur">Jaipur</option>
        <option value="kohima">Kohima</option>
        <option value="kolkata">Kolkata</option>
        <option value="lucknow">Lucknow</option>
        <option value="mumbai">Mumbai</option>
        <option value="panaji">Panaji</option>
        <option value="patna">Patna</option>
        <option value="raipur">Raipur</option>
        <option value="ranchi">Ranchi</option>
        <option value="shillong">Shillong</option>
        <option value="shimla">Shimla</option>
        <option value="srinagar_and_jammu">Srinagar and Jammu</option>
        <option value="thiruvanathapuram">Thiruvanathapuram</option>
        <option value="territories" disabled>UNION TERRITORIES</option>
        <option value="andaman_and_nicobar_islands">Andaman and Nicobar Islands</option>
        <option value="chandigarh">Chandigarh</option>
        <option value="dadra_and_nagar_haveli">Dadra and Nagar Haveli</option>
        <option value="daman_and_div">Daman and Div</option>
        <option value="lakshadweep">Lakshadweep</option>
        <option value="new_delhi">New Delhi</option>
        <option value="puducherry">Puducherry</option> 
</select>          
<input type="submit"  name="hire_submit"value="Search Advocate" class="btn btn-warning form-control mt-2">
</form>
</div>

<?php

if(isset($_POST["hire_submit"]))
{
    $cat = $_POST["cat"];
    $city = $_POST["city"];

    $sql_select = "SELECT * FROM `advocate_detail` WHERE `category`=? AND `location`=?";
    $stmt_hire_lawyer = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt_hire_lawyer,$sql_select);
    mysqli_stmt_bind_param($stmt_hire_lawyer,"ss",$cat,$city);
    mysqli_stmt_execute($stmt_hire_lawyer);
    $advocate_result = mysqli_stmt_get_result($stmt_hire_lawyer);
    while($advocate_fetch = mysqli_fetch_assoc($advocate_result))
    {
        $advocate_fetch_name = $advocate_fetch["name"];
        $advocate_fetch_location = $advocate_fetch["location"];
        $advocate_fetch_experience = $advocate_fetch["experience"];
        $advocate_fetch_category = $advocate_fetch["category"];
        $advocate_fetch_rate = $advocate_fetch["rateing"];
        ?>         
            <div id="hire_lawyer_small_box" class="container m-auto bg-light p-3 row">
                <div class="col-md-3">
                    <img src="images/two.png" alt="">
                </div>
                <div class="col text-left">
                    <div class="row">
                    <div class="col">
                    <h3 class="text-dark"><?php echo $advocate_fetch_name; ?></h3>
                    </div>
                    
                    <div class="col">
                    <h5 class="text-warning"><i class="fa fa-star"></i><?php echo $advocate_fetch_rate; ?></h5>
                    </div>
                    </div>
                    <h5><i class="fa fa-map-marker"></i> <?php echo $advocate_fetch_location; ?> </h5>
                    <h5><i class="fa fa-suitcase"></i> <?php echo $advocate_fetch_experience; ?>+ year of Experience </h5>
                    <h5><i class="fa fa-suitcase"></i> <?php echo $advocate_fetch_category; ?> </h5>
                    <a href="" class="btn btn-info w-50">Book Appointment</a>
                </div>
            </div>
            <hr>
        <?php

    }

}

?>

</div>
    
</center>

</div>
</div>



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
<p> Copyrights &copy; 2019-<?php echo date("Y"); ?>, ccm.com, its affiliates</p>
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