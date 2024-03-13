<!DOCTYPE html>
<?php
session_start();
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="icon" type="image/icon" href="image/icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div style="background:url('images/court1.jpg');background-repeat: no-repeat;background-size: cover;">

    <div id="head" class="container-fluid">
        <div id="phone"><p class="text-white"><i class="fa fa-mobile text-white"> </i> +91 99410-99140  &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; <i class="fa fa-phone-square text-white"> </i> &nbsp; +91 866 733 6507  | &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope text-white"> </i> &nbsp; contact@ccm.com  </p></div>
    </div>
    
    
    <nav id="header" class="navbar navbar-expand-md navbar-light sticty-top">
        <a href="#" class="navbar-brand"><img src="images/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRes"><span class="navbar-toggler-icon"></span></button>
        
        <div id="navbarRes" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
               <center><li class="nav-item active"> <a href="index.php" class="nav-link">Home</a> </li></center>
               <center><li class="nav-item"> <a href="hire_lawer.php" class="nav-link">Hire a Advocate</a> </li></center>
               <center><li class="nav-item"> <a href="new_lawyer.php" class="nav-link">Became a Advocate</a> </li></center>
               <center><li class="nav-item "> <a href="career.php" class="nav-link">Careers</a> </li></center>
              <center>
               <li class="nav-item dropdown dropdown-menu-right">
               <div class="btn-group">
                    <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </button>
                    <div class="bg-dark dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button"><a href="user_login.php" class="nav-link">User Login</a></button>
                        <button class="dropdown-item" type="button"><a href="lawyer_login.php" class="nav-link">Advocate Login</a></button>
                    </div>
                    </div>
                </li>
               </center>
            </ul>
        </div>

    </nav>

    <div id="login" class="container jumbotron  mt-5">
        <div id="logbox" class=" col-xl-6 m-auto">
                <h4 class="text-white">Advocate Login</h4>
            <form action="" method="post" class="form-group">
                    <input type="email" name="logemail" class="form-control mt-2" required placeholder="Enter your email id ........" id="">
                    <input type="password" name="logpass" class="form-control mt-2" required placeholder="Enter your password ........" id="">
                    <input type="submit" name="submitlog" value="Log in" class="btn btn-success btn-md mt-3 w-25"> <br> <br>
            </form> 
            <div class="row">
            <div class="col">
                <a href="new_lawyer.php" class="text-info">New Advocate Registration </a>
            </div>
            <div class="col">
                <a href="forget_password.php" class="text-info">forget password ? </a>
            </div>
        </div>
        </div>
</div>


<?php
					if(isset($_POST["submitlog"]))
                    {
                        $logemail=$_POST["logemail"];
                        $logpass=$_POST["logpass"];
                        
                        $sql="SELECT * FROM `lawyer_register` WHERE email=? AND password=? ";
                        $stmt_admin_login = mysqli_stmt_init($con);
                        mysqli_stmt_prepare($stmt_admin_login,$sql);
                        $bind_admin_login = mysqli_stmt_bind_param($stmt_admin_login,'ss',$logemail,$logpass);
                        if(mysqli_stmt_execute($stmt_admin_login)){
                        $result = mysqli_stmt_get_result($stmt_admin_login);    
                        
                        if($result->num_rows>0)
                        {
                            $_SESSION["useremail"]=$logemail;
                            $_SESSION["userpass"]=$logpass;
                            echo("<script type='text/javascript'>window.location='lawyer_dashboard.php';</script>");
                        }
                        else{
                            echo"<p class='text-danger'>Invalid User or Not Verified Account</p>";
                        }
                    }
                else{
                    echo"";
                  }
                }
					
    ?>



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