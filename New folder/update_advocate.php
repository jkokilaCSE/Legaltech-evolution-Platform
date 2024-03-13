<?php

  $conn = mysql_connect("localhost", "root", "") or die(mysql_error());

  mysql_select_db("fmd", $conn);

  if (isset($_POST['submit'])) {
    $file = $_FILES['file']['tmp_name'];

    $handle = fopen($file,"r");

    while (($fileop = fgetcsv($handle, 100000, ",")) !== false) {
      $Work_Request_Code = $fileop[0];
      $Building_Code = $fileop[1];
      $Floor_Code = $fileop[2];
      $Room_Code = $fileop[3];
      $Work_Description = $fileop[4];
      $Date_Work_Requested = $fileop[5];
      $Primary_Trade_Required = $fileop[6];
      $Problem_Type = $fileop[7];
      $Work_Request_Status = $fileop[8];
      $Requested_by = $fileop[9];

      $sql = mysql_query("INSERT INTO work_requests (Work_Request_Code, Building_Code, Floor_Code, Room_Code, Work_Description, Date_Work_Requested, Primary_Trade_Required, Problem_Type, Work_Request_Status, Requested_by) VALUES ('$Work_Request_Code','$Building_Code','$Floor_Code','$Room_Code','$Work_Description','$Date_Work_Requested','$Primary_Trade_Required','$Problem_Type','$Work_Request_Status','$Requested_by')");
    }

    if($sql){
      echo "Done!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SQL Converter</title>
  <link rel="stylesheet" type="text/css" href="">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div id="mainWrapper">
    <form method="post" action="index.php" enctype="multipart/form-data">
      <input type="file" name="file">
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>

  </div>
</body>
</html>