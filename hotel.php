<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header('location:login.php');
	}

	$con = mysqli_connect('localhost' , 'root' , 'root');

	mysqli_select_db($con , 'tourist');

	$xyz = $_GET['loc_id'];

	$s = "SELECT * FROM hotel where hotel.hotel_id = $xyz; ";
	$result = mysqli_query($con , $s);
	$resultCheck = mysqli_num_rows($result);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel</title>
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

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>Restaurants Near Me</h1><br>
				
						<?php
							if ($resultCheck > 0) {
								while ( $row = mysqli_fetch_assoc($result)) {
								?>
								<a href="#"><p class="head"> <?php echo $row['hname']; ?> <i class="fas fa-angle-double-right ml-2"></i></p></a>
								<p> <?php echo $row['hdescription']; ?> </p><br>

								<?php
								}
							} 
						?>
						
			</div>
			<div class="col-sm-6">
				<div class="view overlay">
					<img src="images/hotel.jpg" class="img-fluid" alt="Hotel">
				</div>
			</div>
		</div>
		<br>
	</div>
	


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>