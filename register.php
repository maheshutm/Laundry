<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include('config.php');

if(isset($_POST['register'])!="")
{

//get data
$name=$_POST['name'];
$username=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['rpass'];
$cpassword=$_POST['cpass'];

//insert query

$sql=mysql_query("INSERT INTO details(`name`,`uname`,`email`,`mobile`,`rpass`,`cpass`) VALUES('$name','$username','$email','$mobile','$password','$cpassword')");
if($sql){
	$msg="Successfully Registered! Click Login Link...";
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

    <title>Laundry-Register</title>

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
<div class="col-sm-12 col-md-6 col-md-offset-3">
	<div class="panel panel-primary">
		<div class=" panel-heading text-center">REGISTER</div>
			<div class="panel-body">
				<form id="registerForm" method="POST" action="">	
				
						<div class="col-sm-12 col-md-8 col-md-offset-2">
							<div class="form-group">
								<label for="name" class="control-form" >NAME</label>
									
										<input type="text" class="form-control" id="name"  name="name" placeholder="Your Name">
									
							</div>
								
							<div class="form-group">
								<label for="user" >USER NAME</label>
									<input type="text" class="form-control" id="uname"  name="uname" placeholder="UserName">
							</div>
								
							<div class="form-group">
								<label for="mail" >EMAIL</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Email">
							</div>
								
							<div class="form-group">
								<label for="mobile" >MOBILE</label>
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
							</div>
					
							<div class="form-group">
								<label for="pass" >PASSWORD</label>
									<input type="password" class="form-control" id="password" name="rpass" placeholder="Password">
							</div>
							
							<div class="form-group">
								<label for="pass" >CONFORM-PASSWORD</label>
									<input type="password" class="form-control"  id="conpassword"  name="cpass" placeholder="Conform-Password">
							</div>
					 
									<input type="submit" name="register" value="Register" class="btn btn-primary  bo-btn" ></input>
									
							<a href="index.php"><p>Already You Have An Account! Login To An Account?</p> </p>
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
			$( "#registerForm" ).validate( {
				rules: {
					name: "required",
					
					uname: {
						required: true,
						minlength: 2
					},
					password: {
						required: true,
						minlength: 5
					},
					conpassword: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					mobile:{
						required:true,
						minlength:10
					}
					
				},
				messages: {
					name: "Please enter your firstname",
					
					uname: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					conpassword: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					mobile:{
					required:"please provide a mobile number",
					minlength: "Your password must be at least 10 characters long"
					},
					email: "Please enter a valid email address"
					
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