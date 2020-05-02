<?php
include("admin/conn.php");
include("class/users.php");
?>













<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/../quiz_oops/css/eve.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>






<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">kar98</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/../quiz_oops/index.php">Home</a></li>
        </ul>
      </li>
    </div>
  </div>
</nav>
  







<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <br>
      <br>
      <br>
      <br>
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>Sign In</h2></div>
       <div class="panel-body">
  <form class="" action="" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="nm">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <center><button type="submit" name="signin" class="btn btn-default">Signin</button></center>
  </form>
  </div>
</div>
</div>


<?php

if(isset($_POST['signin']))
{

    $user=$_POST['nm'];
    $pass=$_POST['pwd'];
    if($user==true)
    {
      $que = "select * from signup where email='$user' && pass='$pass' ";
      $d=mysqli_query($connect,$que);
      $total=mysqli_num_rows($d);

    }
    else
    {
      header('location:stud.php');
    }

    
    if($total==1)
    {
      $_SESSION['userid']=$user;
      header('location:home.php');
    }
    else
    {
      echo "login fail";
    }
}


?>


  
  <div class="col-sm-6">
    <div class="panel panel-primary">
      <div class="panel-heading"><p>**New user? Please,register yourself first!!</p><h2>Registration</h2></div>
   <div class="panel-body">
  <form action="" method="GET">
        <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="n">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="e" class="form-control" id="email" placeholder="Enter email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
    </div>
        <div class="form-group">
      <label for="pwd">Date of birth:</label>
      <input type="Date" class="form-control" id="date" placeholder="(dd/mm/yyyy)" name="d">
    </div>
        <div class="form-group">
      <label for="pwd">Phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="ph">
    </div>
   <center><button type="submit" name="submit" class="btn btn-default">Register</button></center>
  </form>
  </div>
</div>
</div>


<?php
if($_GET['submit']){

$a=$_GET['n'];
$b=$_GET['e'];
$c=$_GET['p'];
$d=$_GET['d'];
$ph=$_GET['ph'];


if($a!="" && $b!="" && $c!="" && $d!="" && $ph!="")
{
    $query ="insert into signup values('','$a','$b','$c','$d','$ph')";
    $data =mysqli_query($connect,$query);
    echo "Registration successful";
}
  else
  {
    echo "Please enter the all details.";
  }
}






?>



</body>
</html>
