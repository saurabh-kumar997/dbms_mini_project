




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to kar98</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/../quiz_oops/css/eve.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color:#0D47A1;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #EFEBE9;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color:#EFEBE9;
      color: white;
      padding: 15px;
      margin-left: auto;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
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
      <strong><a class="navbar-brand" href="../quiz_oops/index.php">kar98</a></strong>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../quiz_oops/index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../quiz_oops/admin/admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
        <li><a href="../quiz_oops/stud.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left"> 
      <h1><p><font face="Century Gothic" >Welcome,</font></p></h1>
      <center><h2><p><font="Times New Roman">Your ultimate destination for online assessment</font></p><h2>
      <br><br><p>
          <font face="Verdana,Arial,Helvetica" size="4">Prepare candidates to perform extraordinarily with an easy to use highly interactive platform and 
          simplify the assessment cycle.</font>
      </p></center>
      <hr>
      <center><h2><p><font="Times New Roman">A new innovation in online examination</font></h2>
        <br>
        <br>
      <p>
          <font face="Verdana,Arial,Helvetica" size="4">Smooth registration, swift creation of
          tests and synchronized user- interface for you and your candidates.</font>
      </p>
      </center>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <div class="container">          
 <img src="../quiz_oops/img/Annotation.png" class="img-rounded" alt="Cinque Terre" width="1200" height="500">
</div>
</footer>

</body>
</html>
