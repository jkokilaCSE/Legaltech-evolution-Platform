<!DOCTYPE html>
<?php

include("functions.php");
session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Court Case Management System</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/icon" href="images/court_logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="icon" type="image/icon" href="image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }  */
        /* body {
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);

        } */

        .main {
            width: 350px;
            height: 530px;
            background: red;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
            /* padding-left: 2%;
            padding-right: 2%;
            margin-left: 10%; */
            /* margin-bottom: 5%; */
            margin: 0 auto;

        }

        #chk {
            display: none;
        }

        .signup {
            position: relative;
            width: 100%;
            height: 100%;
        }

        label {
            color: #fff;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        input {
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #573b8a;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }

        button:hover {
            background: #6d44b8;
        }

        .login {
            height: 460px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: .8s ease-in-out;
        }

        .login label {
            color: #573b8a;
            transform: scale(.6);
        }

        #chk:checked~.login {
            transform: translateY(-500px);
        }

        #chk:checked~.login label {
            transform: scale(1);
        }

        #chk:checked~.signup label {
            transform: scale(.6);
        }
    </style>
</head>

<body>
    <div style=" background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);">

        <div id="head" class="container-fluid">
            <div id="phone">
                <p class="text-white"><i class="fa fa-mobile "> </i> +91 99410-99140 &nbsp;&nbsp;&nbsp;|
                    &nbsp;&nbsp;&nbsp; <i class="fa fa-phone-square "> </i> &nbsp; +91 866 733 6507 |
                    &nbsp;&nbsp;&nbsp; <i class="fa fa-envelope "> </i> &nbsp; contact@ccm.com </p>
            </div>
        </div>


        <nav id="header" class="navbar navbar-expand-md navbar-light sticty-top">
            <a href="#" class="navbar-brand"><img src="images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRes"><span
                    class="navbar-toggler-icon"></span></button>

            <div id="navbarRes" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <center>
                        <li class="nav-item active text-black"> <a style="color:black" href="index.php"
                                class="nav-link">Home</a> </li>
                    </center>
                    <center>
                        <li class="nav-item"> <a href="hire_lawer.php" class="nav-link text-black">Hire
                                an Advocate</a>
                        </li>
                    </center>
                    <center>
                        <li class="nav-item"> <a href="new_lawyer.php" class="nav-link">Join us Advocate</a> </li>
                    </center>
                    <center>
                        <li class="nav-item "> <a href="career.php" class="nav-link">Careers</a> </li>
                    </center>
                    <center>
                        <li class="nav-item dropdown dropdown-menu-right">
                            <div class="btn-group">
                                <button1 type="button" class="btn btn-outline-light dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Login
                                </button1>
                                <div class="bg-dark dropdown-menu dropdown-menu-right">
                                    <button1 class="dropdown-item" type="button"><a href="user_login.php"
                                            class="nav-link">Petitioner Login</a></button1>
                                    <button1 class="dropdown-item" type="button"><a href="lawyer_login.php"
                                            class="nav-link">Advocate Login</a></button1>
                                </div>
                            </div>
                        </li>
                    </center>
                </ul>
            </div>

        </nav>

        <!-- <div style="width:50%;" id="login" class="container jumbotron  mt-5  ">
            <div id="logbox" class=" col-xl-6 m-auto">
                <h1 class=" text-white justify-center flex">Petitioner Login</h1><br>
                <form action="" method="post" class="form-group">
                    <input type="email" name="logemail" class="form-control mt-2" required
                        placeholder="Enter your email id ........">
                    <input type="password" name="logpass" class="form-control mt-2" required
                        placeholder="Enter your password ........">
                    <div class=" flex justify-center">
                        <input type="submit" name=submitlog value="Log in" class="  btn btn-md mt-3 rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2
                        text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">
                    </div>

                </form>
                <div class="flex justify-center">

                </div>
                <br>
                <div class="flex">
                    <a href="new_user.php" class="text-white">new user registration </a>
                </div><br>
                <div class="flex">
                    <a href="forget_password.php" class="text-white">forget password ? </a>
                </div>
            </div>
        </div>
    </div> -->




        <!-- <body> -->
        <div class="main mb-5">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form method="post" class="form-group" id="form_id">

                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" id="username" name="username" placeholder="User name" required="">
                    <input type="email" id="useremail" name="useremail" placeholder="Email" required="">
                    <input type="number" id="usermobile" name="usermobile" required placeholder="Mobile No  ........">
                    <input type="password" id="userpass1" name="userpass1" placeholder="Password" required="">
                    <input type="password" id="userpass2" name="userpass2" placeholder="Confirm Password" required="">
                    <!-- <input type='checkbox' required name='checkbox' required> <a href='tems_conditions.php'
                        target="_block" class="text-white"> I have read the terms and conditions </a> -->
                    <button type="submit" name="submitnewuser" value="Register">Sign up</button>
                </form>
            </div>

            <div class="login">
                <form action="" method="post">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" name="logemail" placeholder="Email" required="">
                    <input type="password" name="logpass" placeholder="Password" required="">
                    <button type="submit" name=submitlog>Login</button>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST["submitlog"])) {
            $logemail = $_POST["logemail"];
            $logpass = $_POST["logpass"];

            $sql = "SELECT * FROM user WHERE email=? AND password=? ";
            $stmt_admin_login = mysqli_stmt_init($con);
            mysqli_stmt_prepare($stmt_admin_login, $sql);
            $bind_admin_login = mysqli_stmt_bind_param($stmt_admin_login, 'ss', $logemail, $logpass);
            if (mysqli_stmt_execute($stmt_admin_login)) {
                $result = mysqli_stmt_get_result($stmt_admin_login);

                if ($result->num_rows > 0) {
                    $_SESSION["useremail"] = $logemail;
                    $_SESSION["userpass"] = $logpass;
                    echo ("<script type='text/javascript'>window.location='user_dashboard.php';</script>");
                } else {
                    echo "<p class='text-danger'>Invalid User or Not Verified Account</p>";
                }
            } else {
                echo "";
            }
        }

        ?>


        <!-- signup  -->
        <?php
        if (isset($_POST["submitnewuser"])) {
            $username = $_POST["username"];
            $useremail = $_POST["useremail"];
            $usermobile = $_POST["usermobile"];
            $userpass1 = $_POST["userpass1"];
            $userpass2 = $_POST["userpass2"];
            $verification_key = rand(000000, 999999);
            if (strlen(trim($userpass1)) < 6) {
                echo "<script type='text/javascript'> swal('Password length to Short!', 'Password length must contain Six digit', 'error'); </script>";
            } else {
                if (strlen(trim($usermobile)) < 10) {
                    echo "<script type='text/javascript'> swal('Invalid Mobile Number', 'Mobile Number length must contain 10 digit', 'error'); </script>";
                } else {
                    if ($userpass1 == $userpass2) {
                        $check_email_alredy_exits_select = "SELECT `email` FROM `user` WHERE email='$useremail'";
                        $check_email_alredy_exits_mysqli_query = mysqli_query($con, $check_email_alredy_exits_select);
                        if (mysqli_num_rows($check_email_alredy_exits_mysqli_query) == 0) {
                            $verify_key = '0';
                            $newusersqlinsert = "INSERT INTO `user`(`sno`, `name`, `email`, `mobile`, `password`, `cpassword`,`vkey`,`verification`) VALUES (NULL,?,?,?,?,?,?,?)";
                            $statement = mysqli_stmt_init($con);
                            if (mysqli_stmt_prepare($statement, $newusersqlinsert)) {
                                mysqli_stmt_bind_param($statement, "sssssss", $username, $useremail, $usermobile, $userpass1, $userpass2, $verification_key, $verify_key);
                                if (mysqli_stmt_execute($statement)) {
                                    echo "<script type='text/javascript'> swal('SUCCESS!', 'Verification OTP Sended to Your Registed Email Address', 'success').then(function(){ window.location='verify_email.php?emailid=$useremail'}); </script>";
                                    #$to_mail_id = $useremail;
                                    #$subject = "Email OTP Verification ";
                                    $vlink = "Otp to verify your Account : $verification_key";
                                    $message = "$vlink";

                                    $to = $useremail;
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
                                    $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

                                    // Send email 
                                    if (mail($to, $subject, $htmlContent, $headers)) {

                                    } else {
                                        echo 'Email sending failed.';
                                    }

                                } else {
                                    echo "<script type='text/javascript'> swal('Fails!', 'Prepard   Fail! ', 'error'); </script>";
                                }
                            } else {
                                echo "<script type='text/javascript'> swal('Fails!', 'Query  Fail!', 'error'); </script>";
                            }
                        } else {
                            echo "<script type='text/javascript'> swal('Fails!', 'Email id alredy Registed!', 'error'); </script>";
                        }
                    } else {
                        echo "<script type='text/javascript'> swal('Fails!', 'Password Missmatch !', 'error'); </script>";
                    }
                }
            }
        } else {
        }
        ?>

        <div id=footer class=" p-4 bg-dark text-white col">
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
                    <p> Copyrights &copy;
                        <?php echo date("Y") ?>, ccm.com, its affiliates
                    </p>
                </div>
                <div id class="col-md p-3 text-center">
                    <p> Designed by </p>
                </div>
            </div>
        </div>

</body>



</html>



<div id=topbtn>
    <a href=#header> <img src=images/top.png alt=topicon></a>
</div>
<script>AOS.init({ duration: 1100, });</script>