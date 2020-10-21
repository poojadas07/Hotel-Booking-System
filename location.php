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
	<title>Locations</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="location.css">
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

	<div class="container">
		<div class="row">

			<h1> Choose Your Location  </h1>

			<div class="jumbotron text-center hoverable ">
	
			<?php 

				for ($id = 1; $id < 6; $id++){

					$s = "SELECT loc_id , image, name, description FROM location where loc_id = $id; ";
					$result = mysqli_query($con , $s);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
						while ( $row = mysqli_fetch_assoc($result)) {

						?>
							<div class="row back p-5">
								<div class="col-md-4 offset-md-1 mx-3 my-3">
									<div class="view overlay">
				        				<?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" class="img-fluid" alt="Image">';?>
				        				<a>
				        					<div class="mask rgba-white-slight"></div>
				        				</a>
				      				</div>
								</div>
				    			
				    			<div class="col-md-7 text-md-left ml-3 mt-3">
									<a href="hotel.php" class="green-text">
				        				<h6 class="h6 pb-1"><i class="fas fa-map-marker-alt pr-1"></i> Destination </h6>
				      				</a>
									<a href="hotel.php" class="white-text">
										<h4 class="h4 mb-4" name="id" style="font-weight: 900; font-family: 'Cinzel Decorative'">
											<?php echo $row['name']; ?>
										</h4>
									</a>
									<p class="font-weight-normal">
										<?php echo $row['description']; ?>
									</p>
									<p class="font-weight-normal">by <strong>Pooja Das</strong>, 10/10/2020</p>

									<?php echo '<a href="hotel.php?loc_id=' . $row['loc_id']. '">'; ?>
										<button class="btn btn-lg active" role="button" aria-pressed="true">Continue <i class="fas fa-angle-double-right ml-2"></i></button>
									</a>
									
								</div>
	  						</div>
	  						<br>
				  			<?php }}}?>
				  			
						</div>
						
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>
</html>

