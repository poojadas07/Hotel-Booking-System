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

	<div class="container-fluid">
		<div class="row">
			
			<div class="card first mt-1">
				<img src="images/left1.jpg" alt="photo" style="width:100%">
				<div class="dropdown">

					<a class="dropdown" data-toggle="dropdown">
						<p style="font-weight: 900; font-family: 'Cinzel Decorative'; color: #000;">
							<?php echo $_SESSION['username']; ?>
							<i class="fas fa-angle-down ml-2"></i>
						</p>
					</a>

					<div class="dropdown-menu">
					    <a class="dropdown-item" href="logout.php"> Logout </a>
					</div>

				</div>
				
			</div>
			<h1>Restaurants Near Me</h1><br>

		</div>
		<div class="row">

			<?php
				if ($resultCheck > 0) {
					while ( $row = mysqli_fetch_assoc($result)) {
			?>

			<div class="col-4">
				
					<div class="card card-image mt-4 detail" style="width: 32vw; height: 70vh;">

					  <?php echo '<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" 
					  		style="background: url(data:image;base64,'.base64_encode($row['image']).');background-repeat: no-repeat; background-size: cover;">' ?>
					    <div class="mt-5">
					    	<br><br>

					    	<a class="btn btn-pink mt-4"><?php echo $row['discount']; ?>%</a>
					    </div>
					  </div>

					  <div class="card-body">
					  	<p class="card-text pink-text" style="float: right; font-size: 30px; line-height: 15px;"><b> $ <?php echo $row['prate']; ?> </b><br><b style="font-size: 10px; "> YOUR PERSONAL RATE </b></p>
					    <h6 class="card-tittle black-text"><b><?php echo $row['hname']; ?></b><br><i class="fas fa-map-marker-alt pr-1" style="font-size: 12px;"> <?php echo $row['location']; ?> </i></h6>
					    <br>
					    
					    <p class="card-text grey-text" style="float: right; font-size: 25px; line-height: 15px;"><b style=" text-decoration: line-through;"> $ <?php echo $row['srate']; ?></b><br><b style="font-size: 10px; "> STANDARD RATE </b></p>
					    
					    <span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					    
					    <a href="rooms.php">
							<button type="submit" class="btn btn-md active mr-5 mt-4" id="SaveAccount" style="float: right;"> See Details <i class="fas fa-angle-double-right ml-2"></i></button>
					    </a>

					  </div>
					  
					</div>
				
			</div>
			<?php
					}
				} 
			?>
			
			
		</div>
		<br>
	</div>
	


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>