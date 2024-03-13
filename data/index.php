<!DOCTYPE html>
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

<div class="container bg-info p-5">
    <h1 class="text-white text-center">Data Entry</h1>
    
    <form action="" method="post" class="form-group">
        <label for="catcode" class="text-white">Category Code :</label>
        <input type="number" name="catcode" class="form-control" placeholder="Enter Category code here....." id="catcode">

        <label for="catname" class="text-white">Category :</label>
        <input type="text" name="catname" class="form-control" placeholder="Enter Category Name here....." id="catname">

        <label for="subcat" class="text-white">Sub Category :</label>
        <input type="text" name="subcat" class="form-control" placeholder="Enter Category code here....." id="subcat">
        <center>
        <input type="submit" value="Submit" name="submit" class="btn btn-warning mt-2 w-75">

        </center>
    </form>
</div>

<?php

$con = mysqli_connect("localhost","root","","court");

if(isset($_POST["submit"]))
{
    #$code = $_POST["catcode"];
    #$catname = $_POST["catname"];
    #$subcat = $_POST["subcat"];
#
    #$sql="INSERT INTO `category`(`sno`, `categorycode`, `category`, `sub_category`) VALUES (NULL,'$code','$catname','$subcat')";
    #if(mysqli_query($con,$sql))
    #{
    #    echo("<script type='text/javascript'></script>");
    #}
    #else{
    #    echo("<script type='text/javascript'>alert('Fail');</script>");
#
    #}

    header("location:about.php?vasu=message");

}

?>

    
</body>
</html>