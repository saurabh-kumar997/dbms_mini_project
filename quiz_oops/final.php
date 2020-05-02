<?php
include("admin/conn.php");
include("class/users.php");
$uid=$_SESSION['userid'];
//echo $uid;
$p = $_SESSION['per'];
//echo $p;
$t=$_SESSION['cat'];
//echo $t;



$que = "select * from signup where email='$uid' ";
      $d=mysqli_query($connect,$que);
      $result = mysqli_fetch_assoc($d);
      $o= $result['name']; 
      $i=$result['id'];


      if($uid !="")
      {
      	$tq = "insert into results values('$i','$o',$t,'$p',NOW()) ";
      	$data =mysqli_query($connect,$tq);
      	
      }
      else
      {
      	header('location:stud.php');
      }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Thankyou</title>
 </head>
 <body>
 <center><h1><strong>Thankyou!!</strong></h1>
 	<br>
 	<br>
 <button><a href="logoutstud.php" style="text-decoration: none;">Logout</a></button>
</center>
 </body>
 </html>