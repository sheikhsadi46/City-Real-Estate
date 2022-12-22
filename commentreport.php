<?php
include("config.php");
$fid = $_GET['id'];
$sql = "UPDATE feedback SET status=1 WHERE fid = {$fid}";
	
$result=mysqli_query($con,$sql);
if($result == true)
{
	
	header("Location:property.php");
}
else{
	
	header("Location:property.php");
}
mysqli_close($con);
?>
