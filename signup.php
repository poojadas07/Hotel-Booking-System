<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="google-signin-client_id" content="483824520391-b4n29pl5tmd2eg6v4mc3gc8e3vu8ijtd.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 left">
				<h1>Welcome Back</h1>
				<h3>Sign Up <br> to Continue Access</h3>
			</div>
			<div class="col-sm-6 right ">
				<h1 class="pb-3 pt-5 pl-5 pr-5">Sign Up</h1>

				<?php 
					if (isset($_SESSION['error']) ){
						echo('<p style="color: red; padding-left: 50px; font-size: 12px;">'.htmlentities($_SESSION['error'])."</p>\n");
						unset($_SESSION['error']);
					}
				?>
				<br>

				<form action="register.php" method="post">
					<div class="row pl-5 pr-5">
					    <div class="col-12">
					      <div class="md-form mt-0">
					      	<input type="text" id="form1" class="form-control" name="name">
							<label for="form1"> Username </label>
					      </div>
					    </div>
					    <div class="col-12">
					      <div class="md-form mt-0">
					        <input type="password" id="form1" class="form-control" name="password">
							<label for="form1"> Password</label>
					      </div>
					    </div>
					</div>
				

					<div class="row ml-4 mr-4">
						<button class="btn btn-primary btn-lg active btn-block" aria-pressed="true" name="register">Continue <i class="fas fa-angle-double-right ml-2"></i></button>
					</div>

				</form>
				<br>
				<p style="text-align: center; font-size: 12px;">Already have an Account ! <a href="login.php"> Sign In </a></p>
				
			</div>
		</div>
	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>