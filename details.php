<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header('location:login.php');
	}

	$con = mysqli_connect('localhost' , 'root' , 'root');

	mysqli_select_db($con , 'tourist');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="hotel.css">
</head>
<body>

	<div class="card">
		<img src="images/left1.jpg" alt="photo" style="width:100%">
		<div class="dropdown">

			<a class="dropdown" data-toggle="dropdown">
				<p style="font-weight: 900; font-family: 'Cinzel Decorative'">
					<?php echo $_SESSION['username']; ?>
					<i class="fas fa-angle-down ml-2"></i>
				</p>
			</a>

			<div class="dropdown-menu">
			    <a class="dropdown-item" href="logout.php"> Logout </a>
			</div>

		</div>
		
	</div>

	
	


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>