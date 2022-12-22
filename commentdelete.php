<?php
include("config.php");
$fid = $_GET['id'];
$sql = "DELETE FROM feedback WHERE fid = {$fid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>Comment Deleted</p>";
	header("Location:profile.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>Comment Not Deleted</p>";
	header("Location:profile.php?msg=$msg");
}
mysqli_close($con);
?>