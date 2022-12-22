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
	// $sql="insert into payment (Amount,Property_ID,Payer_Client_ID,Agent_ID)
	// values('$Amount,$Property_ID,$Payer_Client_ID,$Agent_ID)";
	$result=mysqli_query($con,$sql1);
	if($result)
		{
			$msg="<p class='alert alert-success'>Payment Successfully</p>";
					
		}
		else
		{
			$error="<p class='alert alert-warning'>Payment Error</p>";
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
<style>.row_payment {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          margin: 0 -15px;
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
          padding: 0 25px;
        }
        
        @media (max-width: 800px) {
          .row_payment {
            flex-direction: column-reverse;
          }
          
          </style>

    <title>Invoice</title>
</head>
<body>
<br><br>	
<div class="row_payment">
    <div class="font-18 col-50">
    
        <h6>Name: <?php echo $_POST['firstname'];?></h6>
          <h6>Email: <?php echo $_POST['email'];?></h6>
          
          <h6>Address: <?php echo $_POST['address'];?></h6>
          <h6>City: <?php echo $_POST['city'];?></h6>
          <h6>State: <?php echo $_POST['state'];?></h6>
          <h6>Zip: <?php echo $_POST['zip'];?></h6>
          </div>
    <div class="font-18 col-50">
    <h6></h6>
          <h6>Card Name: <?php echo $_POST['cardname'];?></h6>
          <h6>Card Number: <?php echo $_POST['cardnumber'];?></h6>
          

    </div>
</div>
    
    
    <tr><td><?php echo $_POST['Amount'];?></td></tr>
    
    <?php echo $_POST['Property_ID'];?>

    <div class="row_payment">
        <div class="font-18 col-50">
        <?php
            $query1=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid ");
            while($row1=mysqli_fetch_array($query1))
            { ?>

            <?php
            if ($_POST['Agent_ID']==$row1['uid']){?>
            <h4> Agent:</h4>
            <h6><?php echo $row1['uname']; ?></h6>
            <h6><?php echo $row1['uphone']; ?></h6>
            <h6><?php echo $row1['uemail']; ?></h6>
            <?php   
            }}  ?>
        </div>
        <div class="font-18 col-50">
            <?php 
            $uid=$_SESSION['uid'];
            $query=mysqli_query($con,"SELECT * FROM `user` WHERE uid='$uid'");
            while($row=mysqli_fetch_array($query))
            {
            ?>
            <h4>USER INFO</h4>
            <div class="mb-1 text-capitalize"><b>Name:</b> <?php echo $row['1'];?></div>
            <div class="mb-1"><b>Email:</b> <?php echo $row['2'];?></div>
            <div class="mb-1"><b>Contact:</b> <?php echo $row['3'];?></div>
            <div class="mb-1 text-capitalize"><b>Role:</b> <?php echo $row['5'];?></div>
            <?php } ?>
        </div>
    </div>
    <hr>
    <div class="row_payment">
    <div class="font-18 col-50">
    <?php
            $query1=mysqli_query($con,"SELECT * FROM property WHERE pid='$Property_ID' ");
            while($row1=mysqli_fetch_array($query1))
            { ?>
            <h6><?php echo $row1['1'];?></h6>
            <?php } ?>
        
          </div>
    <div class="col-50">
    <h6>$<?php echo $_POST['Amount'];?></h6>
          

    </div>
</div>
<div class="row_payment">
    <div class="font-18 col-50">
    </div>
    <div class="font-18 col-50">
   
    </div>
    </div>							
                                    
                          
                        
</html>