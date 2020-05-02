<?php
 $host="localhost";
   $username="root";
   $pass="";
   $db_name="quiz_oops";

    $connect=mysqli_connect($host,$username,$pass);
    mysqli_select_db($connect,$db_name);
$sql="CALL `get_result`();";
$data=mysqli_query($connect,$sql);
$result=mysqli_execute($data);
print_r($result);
?>