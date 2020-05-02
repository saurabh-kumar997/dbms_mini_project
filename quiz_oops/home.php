<?php
include("admin/conn.php");
include("class/users.php");
//include("logoutstud.php");

$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
$userprofile = $_SESSION['userid']; 
if ($userprofile==true)  
{
	
}
else
{
    header('loaction:stud.php');
}




      $que = "select * from signup where email='$userprofile' ";
      $d=mysqli_query($connect,$que);
      $result = mysqli_fetch_assoc($d);
      //echo $result['name']; 
//print_r($profile->cat);
//print_r($profile->data);
?>

 




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="/../quiz_oops/css/eve.css">
  
</head>
<body>
  <br>

<div class="container">
    <div class="panel panel-primary">
         <div class="panel-heading"><h2>Home</h2></div>
          <div class="panel-body">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><button type="button" class="btn btn-info">Home</button></a></li>
    <li><a data-toggle="tab" href="#menu1"><button type="button" class="btn btn-info">Profile</button></a></li>
    <li style="float:right"><a href="/../quiz_oops/logoutstud.php"><button type="button" class="btn btn-primary">Logout</button></a>
</li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3> <?php echo "Welcome ".$result['name']."," ?> </h3>
	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Exam</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>
 
	 
	  
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
	  
	  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
	






      <tr>
        <td><?php  echo $result['id'];?></td>
        <td><?php  echo $result['name'];?></td>
        <td><?php  echo $result['email'];?></td>
        <td><?php  echo $result['dob'];?></td>
        <td><?php  echo $result['phone'];?></td>
      </tr>
    </tbody>
  </table>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </div>
  </div>
</div>
</div>
</div>




</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
