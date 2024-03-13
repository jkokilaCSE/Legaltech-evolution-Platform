<?php
session_start();
$con = mysqli_connect("localhost","root","","court");

if(isset($_GET["cnr_number"]))
{
    $transaction_case_sno = $_GET["transaction_id"];

    $transaction_select = "SELECT * FROM `transaction` WHERE `sno`='$transaction_case_sno'";
    $transaction_mysqli_query = mysqli_query($con,$transaction_select);
    while($transaction_mysqli_fetch_assoc = mysqli_fetch_assoc($transaction_mysqli_query))
    {
        $transaction_case_client_email = $transaction_mysqli_fetch_assoc['case_client_email'];
        $transaction_case_payment_id = $transaction_mysqli_fetch_assoc['payment_id'];
        $transaction_case_advocate_id = $transaction_mysqli_fetch_assoc['advocate_id'];
        $transaction_case_cnr_number = $transaction_mysqli_fetch_assoc['cnr_number'];
        $transaction_case_amount = $transaction_mysqli_fetch_assoc['amount'];
        $transaction_case_date_time = $transaction_mysqli_fetch_assoc['date_time'];
    }
}

if(isset($_GET["cnr_number"]))
{
    $case_detail_select = "SELECT * FROM `case_detail` WHERE `case_cnr_number`='$transaction_case_cnr_number'";
    $case_detail_mysqli_query = mysqli_query($con,$case_detail_select);
    while($case_detail_mysqli_fetch_assoc = mysqli_fetch_assoc($case_detail_mysqli_query))
    {
        $case_client_name = $case_detail_mysqli_fetch_assoc["case_client_name"];
        $case_client_email = $_SESSION["useremail"];
        $case_advocate_id = $case_detail_mysqli_fetch_assoc["case_advocate_id"];
    }
}

    $advocate_select = "SELECT * FROM `advocate_detail` WHERE `sno`='$case_advocate_id'";
    $advocate_mysqli_query=mysqli_query($con,$advocate_select);
    while($advocate_mysqli_fetch_assoc = mysqli_fetch_assoc($advocate_mysqli_query)){
        $advocate_name = $advocate_mysqli_fetch_assoc["name"];
        $advocate_mobile = $advocate_mysqli_fetch_assoc["mobile"];
        $advocate_email = $advocate_mysqli_fetch_assoc["email"];
        $advocate_category = $advocate_mysqli_fetch_assoc["category"];
    }


    
if(isset($_GET["cnr_number"]))
{
  $client_select = "SELECT `sno`, `name`, `email`, `mobile` FROM `user` WHERE `email`='$case_client_email'";
  $client_mysqli_query = mysqli_query($con,$client_select);
  while($client_fetch_assoc = mysqli_fetch_assoc($client_mysqli_query))
  {
      $Client_fetch_name = $client_fetch_assoc["name"];
      $Client_fetch_email = $client_fetch_assoc["email"];
      $Client_fetch_mobile = $client_fetch_assoc["mobile"];
  }
  
}

?>

<?php

include("fpdf/fpdf.php");

$invoice = new FPDF();

$invoice -> AddPage();

$invoice -> setFont("Arial","I",13);
$invoice -> cell(190,10,"Tax Invoice",0,1,"C");

$invoice -> setFont("Arial","",18);
$invoice -> cell(190,10,"Court Case Management System Online Tax Invoice",0,1,"C");

$invoice -> setFont("Arial","",13);
$invoice -> cell(190,10,"No 123, The normal Nagar ,and The chennai Area , on the Tamil Nadu state",0,1,"C");
$invoice -> cell(190,10,"","T",1);

$invoice -> setFont("Arial","",13);

$invoice -> cell(95,7,"Client : $Client_fetch_name  ",0,0,"L");
$invoice -> cell(95,7,"Advocate :  $advocate_name  ",0,1,"L");


$invoice -> cell(95,7,"+91 $Client_fetch_mobile ",0,0,"L");
$invoice -> cell(95,7,"+91 $advocate_mobile",0,1,"L");


$invoice -> cell(95,7,"$Client_fetch_email",0,0,"L");
$invoice -> cell(95,7,"$advocate_email ",0,1,"L");


$invoice -> cell(95,7,"28/01/2020 : 16:52:44",0,0,"L");
$invoice -> cell(95,7,"$transaction_case_payment_id ,",0,1,"L");

$invoice -> cell(190,5,"","",1);
$invoice -> cell(190,10,"","T",1);


$invoice -> setFont("Arial","",15);
$invoice -> cell(190,10,"Bill Information :",0,1,"L");

$invoice -> setFont("Arial","",12);

$invoice -> cell(15,10,"S.No",1,0,"C");
$invoice -> cell(120,10,"CNR Number",1,0,"C");
$invoice -> cell(50,10,"Amount",1,1,"C");


$invoice -> cell(15,10,"1",1,0,"C");
$invoice -> cell(120,10,"$transaction_case_cnr_number",1,0,"C");
$invoice -> cell(50,10,"$transaction_case_amount",1,1,"C");

$cgst = ( $transaction_case_amount * 25 )/100;

$invoice -> cell(95,10,"",0,0,"C");
$invoice -> cell(40,10,"CGST",1,0,"C");
$invoice -> cell(50,10,"$cgst",1,1,"C");


$sgst = ( $transaction_case_amount * 25 )/100;

$invoice -> cell(95,10,"",0,0,"C");
$invoice -> cell(40,10,"SGST",1,0,"C");
$invoice -> cell(50,10,"$sgst",1,1,"C");

$total = $transaction_case_amount + $cgst + $sgst;

$invoice -> cell(95,10,"",0,0,"C");
$invoice -> cell(40,10,"Total Amount",1,0,"C");
$invoice -> cell(50,10,"$total",1,1,"C");

$invoice -> cell(190,5,"","B",1);

$invoice -> cell(190,5,"","",1);


$invoice -> cell(190,5,"This is computer generated invoice no signature required. on each printed document  ","",1);
$invoice -> cell(190,5,"instead of signature field. and this invoice will not provided by the advocate this  ","",1);
$invoice -> cell(190,5,"Online Tax invoice will be proviced by Court case Management System.  ","",1);

$invoice -> cell(190,5,"","",1);


$invoice -> cell(190,5,"","B",1);

$invoice -> cell(190,5,"","",1);


$invoice -> cell(190,5," --------------- Thankyou for your Bussiness ----------------- ","",1,"C");


$invoice -> Output();


?> 