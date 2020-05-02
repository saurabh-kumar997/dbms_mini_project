<?php
session_start();
error_reporting(0);
   $host="localhost";
   $username="root";
   $pass="";
   $db_name="quiz_oops";

    $connect=mysqli_connect($host,$username,$pass);
    mysqli_select_db($connect,$db_name);
    if($connect)
    {
    	//echo $_SESSION['userid'];
    }
    else
    {
    	die("Connection failed because" .mysqli_connect_error());
    } 
    ?>




    <!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="/../quiz_oops/css/eve.css">
  <link rel="stylesheet" href="/../quiz_oops/css/dashboard.css">
</head>
<body>

</body>
</html>