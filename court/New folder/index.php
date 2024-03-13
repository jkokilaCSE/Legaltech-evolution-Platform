<!DOCTYPE html>
<?php

include("functions.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Court Case Management System</title>
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

</head>
<body>
<div id="indextopback">

    <div id="head" class="container-fluid">
        <div id="phone"><p class="text-white"><i class="fa fa-mobile text-white"> </i> +91 99410-99140  &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-phone-square text-white"> </i> &nbsp; +91 866 733 6507  | &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope text-white"> </i> &nbsp; contact@ccm.com  </p></div>
    </div>
    
    
    <nav id="header" class="navbar navbar-expand-md navbar-light sticty-top">
        <a href="#" class="navbar-brand"><img src="images/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRes"><span class="navbar-toggler-icon"></span></button>
        
        <div id="navbarRes" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
               <center><li class="nav-item active"> <a href="index.php" class="nav-link">Home</a> </li></center>
               <center><li class="nav-item"> <a href="hire_lawer.php" class="nav-link">Hire an Advocate</a> </li></center>
               <center><li class="nav-item"> <a href="new_lawyer.php" class="nav-link">Join us Advocate</a> </li></center>
               <center><li class="nav-item "> <a href="career.php" class="nav-link">Careers</a> </li></center>
               <center>
               <li class="nav-item dropdown dropdown-menu-right">
               <div class="btn-group">
                    <button type="button" class=" animated bounce btn btn-outline-light dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <div class="bg-dark dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button"><a href="user_login.php" class="nav-link">Petitioner login</a></button>
                        <button class="dropdown-item" type="button"><a href="lawyer_login.php" class="nav-link">Advocate login</a></button>
                    </div>
                    </div>
                </li>
               </center>
            </ul>
        </div>

    </nav>
    

    <div id="slides" class="carousel slide" data-ride="carousel">
	    <div class="carousel-caption" id="carousel-caption">
	    	<h1 id="slideh1" class="display-4">The greatest and strongest firm<br/><span id="orange"> you can trust</span></h1>
	    	<button class="btn btn-outline-white btn-lg"><a href="#conbox">for more</a></button>
	    	<button class="btn btn-info btn-lg">contact</button>
	    </div>
    
    </div>
</div>
<center>
<div id="conbox" class="row w-100 text-white" >
    <div class="col-md p-5"  id='dark-black'>
    <h4>Solve your queries</h4><br>
        <p class="text-white">
        Ask free legal questions related
        to your business and make
        smart legal decisions.
        </p>
    </div>
    <div class="col-md p-5 bg-dark">
    <h4>Lawyers on-Call</h4>
<br>
    Discuss your legal issue with
    an expert lawyer on-call.
    Anytime, Anywhere.

    </div>
    <div class="col-md p-5" id='dark-black1'>
    <h4>Book appointment</h4>
<br>
        <p>Book appointment with your
            preferred Lawyer. Don't worry,
            your first consultation is free.</p>
    </div>
</div>
</center>

<center>
<div class="row w-100 text-white" >
    <div class="col-md p-5 bg-dark"  >
    <h4>Will Drafting & Agreement</h4><br>
        <p class="text-white">
        Make your legal Will online in simple and easy steps. Get your will drafted and property registered from the best property lawyer.
        </p>
    </div>
    <div class="col-md p-5" id='dark-black1'>
    <h4>Cheque & Money Recovery</h4>
<br>
Consult a top lawyer for Cheque Bounce & Money Recovery India to solve all your Cheque Bounce issues at an affordable cost.

    </div>
    <div class="col-md p-5 bg-dark">
    <h4>Court Marriage & Registration</h4>
<br>
        <p>Apply for a marriage certificate online. Marriage registration process explained by best family lawyer online.

</p>
    </div>
</div>
</center>

<div class="bg-light p-5">
<center>
    <h2 class="text-dark">Get a free Ouotes</h2>
    <p class="text-dark">Get free quotes online from top lawyers across India dealing in the specific practice area.</p>
    <p class="text-dark">to know more about us please Enter your email id</p>
    <form action="" class='form-group' method="post">
        <input type="email" name="subscribeemail" placeholder="Enter your e-mail id ......" class='form-control container w-75' id="">
        <input type="submit" value="Subscribe" name='subscribesubmit' class='btn btn-success mt-2 form-control w-50'>
    </form>
</center>
</div>

<div class="bg-light p-5 border border-left-0 border-right-0 border-bottom-0 ">
    <div class="row">
        <div class="col-md bg-dark p-5">
            <center><h3 class="text-white">Why we ?</h3></center> <br>
            <p class="text-white text-justify">
            We provide a platform where you can search Best Lawyers in India. Clients can raise query and get free legal advice from the Best Advocates in India. Apart from being useful for users to search lawyers and seeking legal advice, this website serves as an attractive marketing platform for advocates free of cost.Consult & Hire Best Lawyers in India and get Free Legal Advice Online India by Top Advocates in India at CCM.

A platform where clients can search and meet Top Advocates of their city and Best Lawyers in India and get free legal advice online.

©  Connections Pvt. Ltd. ‐ All Rights Reserved
            </p>
        </div>
        <div class="col-md bg-white border border-dark p-5">
            <center><h3 class="text-dark">Who  we are?</h3></center> <br>
            <p class="text-dark text-justify">
            We provide a platform where you can search Best Lawyers in India. Clients can raise query and get free legal advice from the Best Advocates in India. Apart from being useful for users to search lawyers and seeking legal advice, this website serves as an attractive marketing platform for advocates free of cost.Consult & Hire Best Lawyers in India and get Free Legal Advice Online India by Top Advocates in India at CCM.

A platform where clients can search and meet Top Advocates of their city and Best Lawyers in India and get free legal advice online.

©  Connections Pvt. Ltd. ‐ All Rights Reserved
            </p>
        </div>
        
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="container bg-white p-5 " data-aos="fade-in">
    <div class="item-animate">
    <div class="row" id="countId">
        <div class="col-md">
            <h2 class="text-center">Our Customers</h2>
            <h2 class="text-center code">0</h2>
        </div>

        <div class="col-md">
            <h2 class="text-center ">Our Cases</h2>
            <h2 class="text-center code">0</h2>
        </div>

        <div class="col-md">
            <h2 class="text-center">Our Lawyers</h2>
            <h2 class="text-center code">0</h2>
        </div>
    </div>
    	
    </div>
    </div>
    <script>
        jQuery(function($) { 
            $(window).on('scroll', function() { 

        $({ countNum: $('.code').html() }).animate({ countNum: 99999 }, {
            duration: 2000,
            easing: 'linear',
            step: function () {
            $('.code').html(Math.floor(this.countNum) + "+");
        },
        complete: function () {
            $('.code').html(this.countNum + "+");
            //alert('finished');
        }
        });

            });
        });
    </script>



<div id=footer class="mt-5 p-4 bg-dark text-white col">
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