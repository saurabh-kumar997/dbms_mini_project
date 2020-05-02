<?php
include("conn.php");
include("class/users.php");
$_GET['id'];
$_GET['cat'];



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard </title>
    <link rel="stylesheet" href="/../quiz_oops/css/eve.css">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">kar98</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://localhost/quiz_oops/admin/admin_login.php">Logout</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
             <li><a href="http://localhost/quiz_oops/admin/dispadd.php">Manage Admins</a></li><br>
             <li><a href="http://localhost/quiz_oops/admin/dispcat.php">Manage Categories</a></li><br>
            <li><a href="http://localhost/quiz_oops/admin/dispq.php"> Manage Questions</a></li><br>
                        <li><a href="http://localhost/quiz_oops/admin/addadmin.php"> Add Admins</a></li><br>
            <li><a href="http://localhost/quiz_oops/admin/addcat.php"> Add Category</a></li><br>
            <li><a href="http://localhost/quiz_oops/admin/addq.php"> Add Questions</a></li><br>
            <li><a href="http://localhost/quiz_oops/admin/addq.php">Show Result</a></li><br>
            
          </ul>
          <ul class="nav nav-sidebar">

          </ul>
          <ul class="nav nav-sidebar">

          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Update category</h1>

          <div class="table-responsive">
            <table class="table table-striped">










<form action="" method="GET">
<label>Category_id</label> 
 <input type="text" class="form-control" name="id" value=" <?php echo $_GET['id']; ?> "/>
<label>Category</label>  
<input type="text" class="form-control" name="cat_name" value=" <?php echo $_GET['cat']; ?> "/>
<br>
<br>
<center><input type="submit" name="submit" value="Update"/></center>
</form>











<?php
if($_GET['submit'])
{
  $m = $_GET['id'];
  $n = $_GET['cat_name'];
	$query = "update category set cat_name='$n' where id='$m' ";
  $data = mysqli_query($connect,$query);
  if($data)
  {
    echo "<script>alert('Record Updated')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/quiz_oops/admin/dispcat.php">
    


    <?php
  }
  else
  {
    echo "Record Updation failed!";
  }
  }

  else
  {
    echo "<font color='red'>**Click on Update button to save the changes.**";
  }








?>
</body>
</html>