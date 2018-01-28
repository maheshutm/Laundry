<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include('config.php');

if(isset($_POST['submit'])!="")
{

//get data
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];


//insert query

$sql=mysql_query("INSERT INTO cod(`name`,`mobile`,`address`) VALUES('$name','$mobile','$address')");
if($sql){
	$msg="Successfully done";
	echo"<script type='text/javascript'>alert('$msg');</script>";
	/*header('location:index.html');*/
}
else{
$errormsg="Something Went To Wrong  Try again!";
	echo"<script type='text/javascript'>alert('$errormsg');</script>";
	}
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry-Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="../../lib/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../../dist/jquery.validate.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">LAUNDRY</a>
    </div>
    <div class="collapse navbar-collapse navbar-right"id="myNavbar">
      
      <ul class="nav navbar-nav ">
		<li><a href="book.php"><span class="glyphicon glyphicon-pencil"></span>BOOKING</a></li>
		<li><a href="track.php"><span class="glyphicon glyphicon-magnet"></span>TRACK</a></li>
		<li><a href="payment.php"><span class="glyphicon glyphicon-usd"></span>PAYMENT</a></li>
		<li><a href="orders.php"><span class="glyphicon glyphicon-usd"></span>MY ORDERS</a></li>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> SIGNUP</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>LOGOUT</a></li>
		
      </ul>
    </div>
  </div>
</nav>


<section class="box">
	
<div class="bg-1">	
<div class="login">
<div class="col-sm-12 col-md-6 col-md-offset-3 ">
	<div class="panel panel-primary">
		<div class=" panel-heading text-center">CASH ON DELIVERY</div>
			<div class="panel-body">
				<form method="post" action="">	
				
						<div class="col-sm-8 col-md-8 col-md-offset-2">
							<div class="form-group">
								<label for="user" >NAME</label>
									<input type="text" name="name" class="form-control" placeholder="Name">
								</div>
					
							<div class="form-group">
								<label for="mob" >MOBILE</label>
									<input type="text" name="mobile" class="form-control" placeholder="Mobile">
							</div>
							<div class="form-group">
								<label for="addr" >ADDRESS</label>
									<textarea type="text" name="address" class="form-control" placeholder="Address"style="height:150px;"></textarea>
							</div>
					 
									<input type="submit" name="submit" class="btn btn-primary bo-btn" value="SUBMIT">
									
							
						</div>
				</form>
			
			</div>
	</div>
</div>
	</div>
</div>
</div>
</section>
</body>
</html>