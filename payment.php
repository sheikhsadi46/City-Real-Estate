<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
///code		
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['checkout']))
{
	$Amount=$_POST['Amount'];
    $Payer_Client_ID=$_SESSION['uid'];
    $Property_ID=$_POST['Property_ID'];

    $cardnumber=$_POST['cardnumber'];
    
    $Agent_ID=$_POST['Agent_ID'];


    $firstname=$_POST['firstname'];
    $email=$_POST['email'];
    
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $cardnam=$_POST['cardname'];
    


    
	$sql1="insert into payment (Amount,Property_ID,Payer_Client_ID,Agent_ID)
	values('$Amount',$Property_ID,'$Payer_Client_ID','$Agent_ID')";
	// // $sql="insert into payment (Amount,Property_ID,Payer_Client_ID,Agent_ID)
	// // values('$Amount,$Property_ID,$Payer_Client_ID,$Agent_ID)";
	$result=mysqli_query($con,$sql1);
	if($result)
		{
			$msg="<p class='alert alert-success'>Payment Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Payment Error</p>";
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
<meta name="description" content="City Real Estate">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
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
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
        body {
          font-family: Arial;
          font-size: 17px;
          padding: 8px;
        }
        
        * {
          box-sizing: border-box;
        }
        
        .row_payment {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          margin: 0 -16px;
        }
        .h3_class{
            font-weight: bold;
        }
        .col-a25 {
          -ms-flex: 25%; /* IE10 */
          flex: 25%;
        }
        
        .col-50 {
          -ms-flex: 50%; /* IE10 */
          flex: 50%;
        }
        
        .col-75 {
          -ms-flex: 75%; /* IE10 */
          flex: 75%;
        }
        
        .col-a25,
        .col-50,
        .col-75 {
          padding: 0 16px;
        }
        
        .container_payment {
          background-color: #f2f2f2;
          padding: 5px 20px 15px 20px;
          border: 1px solid lightgrey;
          border-radius: 3px;
        }
        
        input[type=text] {
          width: 100%;
          margin-bottom: 20px;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 3px;
        }
        
        label {
          margin-bottom: 10px;
          display: block;
        }
        
        .icon-container_payment {
          margin-bottom: 20px;
          padding: 7px 0;
          font-size: 24px;
        }
        
        .btn1 {
          background-color: #04AA6D;
          color: white;
          padding: 12px;
          margin: 10px 0;
          border: none;
          width: 100%;
          border-radius: 3px;
          cursor: pointer;
          font-size: 17px;
        }
        
        .btn1:hover {
          background-color: #45a049;
        }
        .all-title-box{
            background: url(images/inner-bg.jpg);
            position: relative;
            padding: 200px 0 70px 0px;
            margin-bottom: 0px;
        }

        .all-title-box::before{
            content: "";
            position: absolute;
            background: rgba(0,0,0,0.5);
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
        }

        .all-title-box .container{
            position: relative;
        }

        .all-title-box h2{
            color: #ffffff;
            padding: 0px;
            font-size: 40px;
            font-weight: 600;
        }
        .all-title-box .container{
            position: relative;
        }  
        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        }
        hr {
          border: 1px solid lightgrey;
        }
        
        span.price {
          float: right;
          color: grey;
        }
        
        input::placeholder {
            opacity: 0.2;
        }
        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
          .row_payment {
            flex-direction: column-reverse;
          }
          .col-a25 {
            margin-bottom: 20px;
          }
        }
        </style>
<!--	Title
	=========================================================-->
<title>City Real Estate</title>
</head>
<body>




<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Property Grid</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Property Grid</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->
        
        <!--	Property Grid
		===============================================================-->
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Payment</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
    <br><br>
            <div class="row_payment">
              <div class="col-75">
                <div class="container_payment">
                <?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
                  <form action='invoice.php' method='POST'>
                  
                    <div class="row_payment">
                      <div class="col-50">
                        <h3 class="h3_class">Billing Address</h3>
                        <input type="hidden" name="Amount" value=<?php echo $row['13'];?>>

                        <input type="hidden" name="Property_ID" value=<?php echo $row['0'];?>>
                        <input type="hidden" name="Agent_ID" value=<?php echo $row['23'];?>>



                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="New York">
            
                        <div class="row_payment">
                          <div class="col-50">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="NY">
                          </div>
                          <div class="col-50">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="10001">
                          </div>
                        </div>
                      </div>
            
                      <div class="col-50">
                        <h3 class="h3_class">Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                          <i class="fa fa-cc-visa" style="color:navy;"></i>
                          <i class="fa fa-cc-amex" style="color:blue;"></i>
                          <i class="fa fa-cc-mastercard" style="color:red;"></i>
                          <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" required placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                        <div class="row_payment">
                          <div class="col-50">
                            <label for="expyear">Exp Year</label>
                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                          </div>
                          <div class="col-50">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="352">
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div>
                        <button type="submit" name='checkout' class="btn1">Continue to checkout</button>
                    </div>
                  </form>
                  <?php } ?>
                </div>
              </div>
              <div class="col-a25">
                <!-- <div class="container">
                  <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                  <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                  <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                  <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                  <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                  <hr>
                  <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                </div> -->
              </div>
            </div>

        
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