<?php
// include("config.php");


// // view code//
// $sql = "SELECT * FROM user where uid='$uid'";
// $result = mysqli_query($con, $sql);
// while($row = mysqli_fetch_array($result))
// 	{
// 	  $img=$row["uimage"];
// 	}
// @unlink('user/'.$img);

// //end view code
// $msg="";
// $sql = " FROM user WHERE uid = {$uid}";
// $result = mysqli_query($con, $sql);
// if($result == true)
// {
// 	$msg="<p class='alert alert-success'>User Deleted</p>";
// 	header("Location:userlist.php?msg=$msg");
// }
// else
// {
// 	$msg="<p class='alert alert-warning'>User not Deleted</p>";
// 		header("Location:userlist.php?msg=$msg");
// }

// mysqli_close($con);
?> 


<?php 
include("config.php");
$uid = $_GET['id'];
$error="";
$msg="";
if(isset($_REQUEST['reg']))
{
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$pass=$_REQUEST['pass'];
	$utype=$_REQUEST['utype'];
	
	$uimage=$_FILES['uimage']['name'];
	$temp_name1 = $_FILES['uimage']['tmp_name'];
	// $pass= sha1($pass);
	
	$query = "SELECT * FROM user where uemail='$email'";
	$res=mysqli_query($con, $query);
	$num=mysqli_num_rows($res);
	
	if($num == 1)
	{
		$error = "<p class='alert alert-warning'>Email Id already Exist</p> ";
	}
	else
	{
		
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage))
		{
			
			$sql="INSERT INTO user (uname,uemail,uphone,upass,utype,uimage) VALUES ('$name','$email','$phone','$pass','$utype','$uimage')";
			$result=mysqli_query($con, $sql);
			move_uploaded_file($temp_name1,"admin/user/$uimage");
			   if($result){
				   $msg = "<p class='alert alert-success'>Register Successfully</p> ";
			   }
			   else{
				   $error = "<p class='alert alert-warning'>Register Not Successfully</p> ";
			   }
		}else{
			$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
		}
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM HOMES | Profile</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../css/layerslider.css">
<link rel="stylesheet" type="text/css" href="../css/color.css">
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">

<!--	Title
	=========================================================-->
<title>City Real Estate</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("header.php");?>
        
        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Register</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->
         <?php
        //  <?php 
         
        //  $query=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$uid'");
        //  while($row=mysqli_fetch_array($query))
        //  {
    
													
                                                    $query=mysqli_query($con,"select * from user where uid='$uid'");
                                                    $cnt=1;
                                                    while($row=mysqli_fetch_row($query))
                                                        {
                                                ?>
		 
		 
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Update Profile</h1>
								<!-- <p class="account-subtitle">Access to our dashboard</p> -->
								<?php echo $error; ?><?php echo $msg; ?>
								<!-- Form -->
								<form method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text"  name="name" class="form-control" placeholder=<?php echo $row['1'];  ?>>
									</div>
									<div class="form-group">
										<input type="email"  name="email" class="form-control" placeholder=<?php echo $row['2'];  ?>>
									</div>
									<div class="form-group">
										<input type="text"  name="phone" class="form-control" placeholder=<?php echo $row['3'];  ?> maxlength="10">
									</div>
									<div class="form-group">
										<input type="password" name="pass"  class="form-control" placeholder=<?php echo $row['5'];  ?>>
									</div>

									 <div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="user" checked>User
									  </label>
									</div>
									<div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="agent">Agent
									  </label>
									</div>
									<div class="form-check-inline disabled">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="builder">Builder
									  </label>
									</div> 
									
									<div class="form-group">
										<label class="col-form-label"><b>User Image</b></label>
										<input class="form-control" name="uimage" type="file">
									</div>
									
									<button class="btn btn-success" name="update" value="update" type="submit">Update User Profile</button>
									
								</form>
								
								<div class="login-or">
									<span class="or-line"></span>
									<!-- <span class="span-or">or</span> -->
								</div>
								
								<!-- Social Login -->
								<!-- <div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class="google"><i class="fab fa-google"></i></a>
									<a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
									<a href="#" class="google"><i class="fab fa-instagram"></i></a>
								</div> -->
								<!-- /Social Login -->
								
								<!-- <div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div> -->
								<?php
												$cnt=$cnt+1;
												} 
												?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!--	login  -->
        
        
        <!--	Footer   start-->
		<?php //include("../include/footer.php");?> 
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 
<!--	Js Link
============================================================--> 
<!-- jQuery -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
</body>
</html>
