<?php
include("conn.php");
include("class/users.php");
$m = $_GET['id'];
$_GET['q'];
$_GET['a1'];
$_GET['a2'];
$_GET['a3'];
$_GET['a4'];
$_GET['a'];
$_GET['cat'];




$query = "delete from questions where id='$m' ";
$data = mysqli_query($connect,$query);
if($data)
{
	echo "<script>alert('Record deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/quiz_oops/admin/dispq.php">
	<?php
}
else
{
	echo "Deletion Failed.";
}


?>