<?php
include("conn.php");
include("class/users.php");
$m = $_GET['id'];
$query = "delete from category where id='$m' ";
$data = mysqli_query($connect,$query);
if($data)
{
	echo "<script>alert('Record deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/quiz_oops/admin/dispcat.php">
	<?php
}
else
{
	echo "Deletion Failed.";
}


?>