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
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="icon" type="image/icon" href="images/icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="css/aos.js"></script>
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

    
<div id="login" class="container jumbotron">
        <div id="logbox" class="border border-white col-xl-6 m-auto">
                <h4 class="text-white">New User Registeration</h4>
            <form method="post" class="form-group" id="form_id">
                    <input type="text" name="username" required class="form-control mt-2" placeholder="Name ........" id="username">
                    <input type="email" name="useremail" required class="form-control mt-2" placeholder="Email id ........" id="useremail">
                    <input type="number" name="usermobile" required class="form-control mt-2" placeholder="Mobile No  ........" id="usermobile">
                    <input type="password" name="userpass1" required class="form-control mt-2" placeholder="Password ........" id="userpass1">
                    <input type="password" name="userpass2" required class="form-control mt-2" placeholder="Confirm password ........" id="userpass2"> <br/>
                    <input type='checkbox' required name='checkbox' required> <a href='tems_conditions.php' target="_block"> I have read the terms and conditions </a> <br>

                    <input type="submit" name="submitnewuser" value="Register" class="btn btn-success btn-md mt-3 w-25"> <br> <br>
                    <a href="login.php" class="text-primary">Already Registered user</a>
            </form> 
                

     <?php
     if(isset($_POST["submitnewuser"]))
     {
         $username = $_POST["username"];
         $useremail = $_POST["useremail"];
         $usermobile = $_POST["usermobile"];
         $userpass1 = $_POST["userpass1"];
         $userpass2 = $_POST["userpass2"];
         $verification_key = rand(000000,999999);
         if(strlen(trim($userpass1)) <6)
         {
             echo "<script type='text/javascript'> swal('Password length to Short!', 'Password length must contain Six digit', 'error'); </script>";
         }
         else{
             if(strlen(trim($usermobile)) <10)
             {
                 echo "<script type='text/javascript'> swal('Invalid Mobile Number', 'Mobile Number length must contain 10 digit', 'error'); </script>";
             }
             else{
         if($userpass1 == $userpass2){
             $check_email_alredy_exits_select = "SELECT `email` FROM `user` WHERE email='$useremail'";
             $check_email_alredy_exits_mysqli_query = mysqli_query($con,$check_email_alredy_exits_select);
             if(mysqli_num_rows($check_email_alredy_exits_mysqli_query)==0){
                 $verify_key = '0';
                 $newusersqlinsert= "INSERT INTO `user`(`sno`, `name`, `email`, `mobile`, `password`, `cpassword`,`vkey`,`verification`) VALUES (NULL,?,?,?,?,?,?,?)";
                 $statement = mysqli_stmt_init($con);
                 if(mysqli_stmt_prepare($statement,$newusersqlinsert))
                 {
                     mysqli_stmt_bind_param($statement,"sssssss",$username,$useremail,$usermobile,$userpass1,$userpass2,$verification_key,$verify_key);
                     if(mysqli_stmt_execute($statement)){
                     echo "<script type='text/javascript'> swal('SUCCESS!', 'Verification OTP Sended to Your Registed Email Address', 'success').then(function(){ window.location='verify_email.php?emailid=$useremail'}); </script>";
                     #$to_mail_id = $useremail;
                     #$subject = "Email OTP Verification ";
                     $vlink = "Otp to verify your Account : $verification_key";
                     $message = "$vlink";

                        $to =$useremail; 
                        $from = 'praveenvel268@gmail.com'; 
                        $fromName = 'Court Case Management System'; 
                        
                        $subject = "Email OTP Verification "; 
                        
                        $htmlContent = "
                        
                            <html> 

                            <style type='text/css'>
                            
                            </style>

                            <body> 
                                <h1>Thanks you for joining with us!</h1> 
                             $message
                            </body> 
                            </html>"; 
                        
                        // Set content-type header for sending HTML email 
                        $headers = "MIME-Version: 1.0" . "\r\n"; 
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                        
                        // Additional headers 
                        $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
                        
                        // Send email 
                        if(mail($to, $subject, $htmlContent, $headers)){ 

                        }else{ 
                        echo 'Email sending failed.'; 
                        }

                    }
             else{
                 echo "<script type='text/javascript'> swal('Fails!', 'Prepard   Fail! ', 'error'); </script>";
             }
         }
             else{
                 echo "<script type='text/javascript'> swal('Fails!', 'Query  Fail!', 'error'); </script>";
             }
         }
         else{
             echo "<script type='text/javascript'> swal('Fails!', 'Email id alredy Registed!', 'error'); </script>";
         }
         }
         else{
             echo "<script type='text/javascript'> swal('Fails!', 'Password Missmatch !', 'error'); </script>";
         }
     }
 }
 }
     else{
     }
 ?>       
        </div>
</div>

    



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