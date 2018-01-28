<!DOCTYPE html>
<html lang="en">
<?php
session_start();//session start here. 
include('config.php');// call the database.

//get data
if(isset($_POST['submit']))
{
	//get data
$username=$_POST['uname'];
$password=$_POST['rpass'];
$result=mysql_query("SELECT * FROM details WHERE uname='$username' and rpass='$password'");
if($row=mysql_fetch_array($result))
{

	//check the value for login
$_SESSION['uname']=$username;
$_SESSION['rpass']=$password;
header('location:book.php');
}
else{
	$errormsg="Username and Password did not match";
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

    <title>Laundry System - Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="lib/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="dist/jquery.validate.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	

</head>
<body>
<section class="box">
	
<div class="bg-1">	
<div class="login">
<div class="col-sm-12 col-md-6 col-md-offset-3 ">
	<div class="panel panel-primary">
		<div class=" panel-heading text-center">LOGIN</div>
			<div class="panel-body">
				<form method="POST" action="" id="loginForm">	
				
						<div class="col-sm-8 col-md-8 col-md-offset-2">
							<div class="form-group">
								<label for="user" >USER NAME</label>
									
									<input type="text" id="uname" name="uname" class="form-control" placeholder="UserName">
								</div>
					
							<div class="form-group">
								<label for="pass" >PASSWORD</label>
									<input type="password" id="password"  name="rpass" class="form-control" placeholder="Password">
							</div>
					 
							<input type="submit" name="submit" class="btn btn-primary bo-btn" value="Login" ></input>
							<a href="register.php"><p>You Don't Have An Account! Create An Account?</p> </p>
						</div>
				</form>
			
			</div>
	</div>
</div>
	</div>
</div>
</div>
</section>
<script  language="javascript">


		$( document ).ready( function () {
			$( "#loginForm" ).validate( {
			
		rules:{
			uname:"required",
			password:"required"
		},
		messages:{
			uname:"please enter user name",
			password:"please enter password"
		},
		
		errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );

			
		} );


</script>
</body>
</html>
