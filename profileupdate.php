<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

//// code insert
//// add code

$msg="";
if(isset($_POST['add1']))
{
	$uid=$_REQUEST['uid'];
	
	
	$name=$_POST['newname'];
    $phone=$_POST['newphone'];
	

	

	$sql = "UPDATE user SET uname= '{$name}',uphone='{$phone}' WHERE uid = {$uid}";
	
	$result=mysqli_query($con,$sql);
	if($result == true)
	{
		$msg="<p class='alert alert-success'>Comment Updated</p>";
		header("Location:profile.php?msg=$msg");
	}
	else{
		$msg="<p class='alert alert-warning'>Not Updated</p>";
		header("Location:profile.php?msg=$msg");
	}
}						
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!--  meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

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
		<?php include("include/header.php");?>
        <!--	Header end  -->

		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Update Profile</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
                       
						<?php 
									$uid=$_SESSION['uid'];
									$query=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$uid'");
									while($row=mysqli_fetch_array($query))
									{
								?>
                                
								<div class="description">
									<h5 class="text-secondary">Name</h5><hr>
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">New Name</label>
													<div class="col-lg-9">
                                                    <input type="text" name="newname" >
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Phone</label>
													<div class="col-lg-9">
                                                        <input type="text" name="newphone" >
														
													</div>
												</div>
                                                <div class="form-group row">
													<label class="col-lg-2 col-form-label">Address</label>
													<div class="col-lg-9">
														
													</div>
												</div>
												
											</div>
											
										</div>

											<input type="submit" value="Submit" class="btn btn-success"name="add1" style="margin-left:200px;">
										
									</div>
								</form>
								
							<?php
								} 
							?>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 
<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>