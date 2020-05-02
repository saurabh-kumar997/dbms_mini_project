<?php
include("conn.php");
include("class/users.php");
 

if(isset($_POST['un']))
{
  $uname=$_POST['un'];
  $pass=$_POST['pd'];
  $sql="select * from admin where user='".$uname."'AND pass='".$pass."'limit 1";
  $result=mysqli_query($connect,$sql);
  if(mysqli_num_rows($result)==1)
  {
    $_SESSION['ad']=$uname;
    header("Location: /../quiz_oops/admin/index.php");
    //echo $_SESSION['ad'];
    exit();
  }
  else{
    echo "you have entered incorrect username or password";
    exit();
  }
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/admins.css">
</head>
<body>





<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <strong><a class="navbar-brand" href="/../quiz_oops/index.php">kar98</a></strong>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/../quiz_oops/index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/../quiz_oops/admin/admin_login.php"><span class="glyphicon glyphicon-log-in"></span>Admin</a></li>
        <li><a href="/../quiz_oops/stud.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>
    </div>
  </div>
</nav>








    <br>
    <br>
<div class="container">
   <div class="col-sm-12">
  <div class="panel panel-primary">
  <div class="panel-heading"><h3>Admin Login</h3></div>
   <div class="panel-body">
  <form method="POST" action="#">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="un" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pd" id="pwd" placeholder="Enter password">
    </div>
   <center><button type="submit" class="btn btn-default">Submit</button></center>
  </form>
</div>
</div>
</div>
</div>
</div>

</body> 
</html>
