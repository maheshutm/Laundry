<!DOCTYPE html>
<html lang="en">
<?php
session_start();



include('config.php');

if(isset($_POST['submit'])!="")
{

//get data
$date=$_POST['date'];
$place=$_POST['place'];
$type=$_POST['type'];
$powder=$_POST['powder'];
$towel=$_POST['towel'];
$sari=$_POST['sari'];
$chuti=$_POST['chuti'];
$shirt=$_POST['shirt'];
$pant=$_POST['pant'];
$innerwear=$_POST['i_wear'];
$total=$_POST['total'];

//insert query

$test=mysql_query("INSERT INTO booking(`date`,`place`,`type`,`powder`,`towel`,`sari`,`chuti`,`shirt`,`pant`,`i_wear`,`total`) VALUES('$date','$place','$type','$powder','$towel','$sari','$chuti','$shirt','$pant','$innerwear','$total')");
if($test){
	$msg="Successfully Booked";
	echo"<script type='text/javascript'>alert('$msg');</script>";
	
}
else{
$errormsg="Not Book";
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

    <title>Laundry-Booking</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src="js/jquery.js" ></script>
	<script src="js/bootstrap.min.js"></script>
	<script language="javascript">
		function countNum(){
			var a = parseInt(document.getElementById("value1").value);
			var b = parseInt(document.getElementById("value2").value);
			var c = parseInt(document.getElementById("value3").value);
			var d = parseInt(document.getElementById("value4").value);
			var e = parseInt(document.getElementById("value5").value);
			var f = parseInt(document.getElementById("value6").value);
			var z = document.getElementById("total");
			z.value = a + b + c + d + e + f;
		}
	</script>

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
<div class="col-sm-4 col-md-offset-2">
	<div class="panel panel-primary">
		<div class=" panel-heading text-center">BOOK</div>
			<div class="panel-body">
				<form method="POST" action="">	
				
						<div class="col-sm-12 col-md-8 col-md-offset-2">
							<div class="form-group">
								<label for="user" >DATE</label>
									<input type="text" name="date" class="form-control" placeholder="Date">
								</div>
								
								<div class="form-group">
								<label for="user" >PLACE</label>
									<input type="text" name="place" class="form-control" placeholder="Your Place">
								</div>
								
								<div class="form-group">
									<label for="user" >WASHING TYPE</label>
									<select class="form-control" name="type">
										<option value="Dry">Dry</option>
										<option value="Wet">Wet</option>
										<option value="Stone">Stone</option>
										<option value="NO">--NO--</option>
									</select>
								</div>
								<div class="form-group">
									<label  >WASHING POWDER</label>
									<select class="form-control" name="powder">
										<option value="RIN">RIN</option>
										<option value="SURF EXCE">SURF EXCEL</option>
										<option value="POWER">POWER</option>
										<option value="NO">--NO--</option>
									</select>
								</div>
								<div class="form-group">
								<label for="user" >TOWEL</label>
									<input type="text" name="towel" class="form-control"  id="value1"  placeholder="How many towel">
								</div>
					
							<div class="form-group">
								<label for="pass" >SAREE</label>
									<input type="text" name="sari" class="form-control" id="value2"  placeholder="How Many Sari">
							</div>
							
							<div class="form-group">
								<label for="pass" >CHUDI</label>
									<input type="text" name="chuti" class="form-control" id="value3" placeholder="How Many Chuti">
							</div>
							
							<div class="form-group">
								<label for="pass" >SHIRT</label>
									<input type="text" name="shirt" class="form-control" id="value4"  placeholder="How Many Shirt">
							</div>
							
							<div class="form-group">
								<label for="pass" >PANT</label>
									<input type="text" name="pant" class="form-control"id="value5" placeholder="How Many Pant">
							</div>
							
							<div class="form-group">
								<label for="pass" >INNER WEAR</label>
									<input type="text" name="i_wear" class="form-control"  id="value6" placeholder="How Many Inner Wear">
							</div>
							
							
					
						
						<div class=" col-sm-2">		
							<button type="button"   class="btn btn-primary bo-btn"  onclick="countNum()">TOTAL</button>
						</div>
						
						<div class=" col-sm-6 col-md-offset-3">			
							<div class="form-group">
								
									<input type="text" name="total" class="form-control" id="total" placeholder="">
							</div>
						</div>
						<div class="col-sm-12 col-md-8 col-md-offset-2">
							<input type="submit" name="submit" class="btn btn-primary bo-btn" ></input>
						</div>
					</div>	
									
									
							
						
				</form>
			
			</div>
	</div>
</div>
<div class="bg-1">	
<div class="login">
<div class="col-sm-6 col-md-offset-2 ">
	<div class="panel panel-primary">
		<div class=" panel-heading text-center"><span class="glyphicon glyphicon-usd"></span>PRICE</div>
			<div class="panel-body">
				<form method="POST" action="">	
				
						<div class="col-sm-12 col-md-8 col-md-offset-3">
							<div class="form-group">
								<h4 id="shirt">SHIRT:Rs.5</h4>
								<h4 id="pant">PANT:Rs.10</h4>
								<h4 id="saree">SAREE:Rs.15</h4>
								<h4 id="chudi">CHUDI:Rs.10</h4>
							</div>
				</form>
			
			</div>
	</div>
</div>
	</div>
</div>
</div>
<div class="bg-1">	
<div class="login">
<div class="col-sm-6 col-md-offset-2 ">
	<div class="panel panel-primary">
		<div class=" panel-heading text-center"><span class="glyphicon glyphicon-tags"></span>OFFER</div>
			<div class="panel-body">
				<form method="POST" action="">	
				
						<div class="col-sm-12 col-md-8 col-md-offset-3">
							<div class="form-group">
								<h4>SHIRT:Rs.3</span></h4>
								<h4>PANT:Rs.8</span></h4>
								<h4>SAREE:Rs.13</span></h4>
								<h4>CHUDI:Rs.8</span></h4>
							</div>
				</form>
			
			</div>
	</div>
</div>
	</div>
</div>
</div>
<div class="bg-1">	
<div class="login">
<div class="col-sm-9 col-md-offset-1 ">
	<div class="row">
	<div class="col-sm-4"><img src="img/photo1.jpg" class="img-responsive"></div>
	<div class="col-sm-4"><img src="img/photo3.jpg" class="img-responsive"></div>
	<div class="col-sm-4"><img src="img/photo4.jpg" class="img-responsive"></div>
	
	</div>
	</div>
</div>
</div>

</section>
	</div>
</div>
</div>
</section>

         
</body>
</html>