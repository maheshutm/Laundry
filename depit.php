<!DOCTYPE html>
<html lang="en">

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

</head>
<style>
.navbar{
		
		color:#fff;
	}
</style>
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
<header>
</header>

<section class="box">
	
<div class="bg-1">	
<div class="login">
<div class="col-sm-4 col-md-4 col-md-offset-4 ">
	<div class="panel panel-primary">
		<div class=" panel-heading text-center">DEPIT CARD</div>
			<div class="panel-body">
				<form method="" action="">	
				
						<div class="col-sm-12 col-md-12 ">
							<div class="form-group">
								<label for="user" >CARD NUMBER</label>
									<input type="text"  class="form-control" placeholder="Number">
							</div>
							<div class="form-group">
								<label for="user" >EXP DATE</label>
									<input type="text"  class="form-control" placeholder="Date">
							</div>
							<div class="form-group">
								<label for="user"> CVV NUMBER</label>
									<input type="text"  class="form-control" placeholder="CVV number">
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