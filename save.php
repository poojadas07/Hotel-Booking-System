<?php
	
	session_start();

	if (!isset($_SESSION['username'])) {
	 	header('location:login.php');
	 } 

	 $con = mysqli_connect('localhost' , 'root' , 'root');

	 mysqli_select_db($con , 'tourist');

	 $_SESSION['success'] = "Your Room Booked successfully !";

	 $name = mysqli_real_escape_string($con , $_POST['name']);
	 $email = mysqli_real_escape_string($con , $_POST['email']);
	 $phone = mysqli_real_escape_string($con , $_POST['phone']);
	 $password = mysqli_real_escape_string($con , $_POST['password']);
	 $address = mysqli_real_escape_string($con , $_POST['address']);
	 $city = mysqli_real_escape_string($con , $_POST['city']);
	 $state = mysqli_real_escape_string($con , $_POST['state']);
	 $zip = mysqli_real_escape_string($con , $_POST['zip']);
	 $country = mysqli_real_escape_string($con , $_POST['country']);
	 $aadhar = mysqli_real_escape_string($con , $_POST['aadhar']);
	 $room = mysqli_real_escape_string($con , $_POST['room']);
	 $nroom = mysqli_real_escape_string($con , $_POST['nroom']);
	 $arrival = mysqli_real_escape_string($con , $_POST['arrival']);
	 $departure = mysqli_real_escape_string($con , $_POST['departure']);
	 $pick = mysqli_real_escape_string($con , $_POST['pick']);
	 $flightn = mysqli_real_escape_string($con , $_POST['flightn']);
	 $message = mysqli_real_escape_string($con , $_POST['message']);

	 $query = "INSERT INTO details (name , email , phone , password , address , city , state , zip , country , aadhar, room , nroom , arrival , departure , pick , flightn , message ) VALUES ('{$name}' , '{$email}' , '{$phone}' , '{$password}' , '{$address}' , '{$city}' , '{$state}' , '{$zip}', '{$country}' , '{$aadhar}' , '{$room}' , '{$nroom}' ,'{$arrival}' , '{$departure}' , '{$pick}' , '{$flightn}', '{$message}')";
	 
	 mysqli_query($con , $query);

	 $query1 = "SELECT * FROM details";

	 if ($result = mysqli_query($con , $query1)) {
	 	
	 	while ($row = $result->fetch_assoc()) {
	 		$name = $row["name"];
	 		$email = $row["email"];
	 		$phone = $row["phone"];
	 		$password = $row["password"];
	 		$address = $row["address"];
	 		$city = $row["city"];
	 		$state = $row["state"];
	 		$zip = $row["zip"];
	 		$country = $row["country"];
	 		$aadhar = $row["aadhar"];
	 		$room = $row["room"];
	 		$nroom = $row["nroom"];
	 		$arrival = $row["arrival"];
	 		$departure = $row["departure"];
	 		$pick = $row["pick"];
	 		$flightn = $row["flightn"];
	 		$message = $row["message"];
	 	}
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="save.css">
</head>
<body>


    <div class="card topcard">
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
            <h1 class="px-6 py-3" style="text-align: center;">
            	<b><i class="fas fa-check"></i>
	    			<?php 
	                	echo $_SESSION['success'];
	                	unset($_SESSION['success']);
	                ?> 
	            </b>
        	</h1>
        </div>
    	<br>
		<div class="row upper">
			<div class="col-6 pl-5">
				<img src="https://lmpixels.com/wp/aveo/wp-content/uploads/2017/09/photo.png" alt="user" class="image m-5">
				
			</div>
			<div class="col-6">
				<h6><?php echo $name ;?></h6><br>
				<p class="pl-5"><b><i class="fa fa-envelope" aria-hidden="true"></i></b> <?php echo $email ;?></p>
				<p class="pl-5"><b><i class="fa fa-phone" aria-hidden="true"></i></b> <?php echo $phone ;?></p>
				<p class="pl-5"><b><i class="fa fa-key" aria-hidden="true"></i></b> <?php echo $password ;?> </p>
				
			</div>
		</div>
		<div class="row lower pt-5">
			<div class="col-6 mt-5">
				<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-map-marker-alt" aria-hidden="true"></i> Address : </b>
					<b class="ml-4" style="font-size: 18px;"> <?php echo $address ;?>, <?php echo $city ;?></b> 
					<b class="ml-5 pl-5" style="font-size: 18px;"> <?php echo $zip ;?> , <?php echo $state ;?> , <?php echo $country ;?></b>
				</h5>
				<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-fingerprint pr-1" aria-hidden="true"></i> Aadhar Number :</b>
					<b class="ml-4" style="font-size: 18px;"> <?php echo $aadhar ;?> </b>
				</h5>
				<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-plane-arrival pr-1" aria-hidden="true"></i> Arrival Time : </b>
					<b class="ml-4" style="font-size: 18px;"> <?php echo $arrival ;?></b>
				</h5>
				<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-plane-departure pr-1" aria-hidden="true"></i> Depature Time : </b>
		      		<b class="ml-4" style="font-size: 18px;"> <?php echo $departure ;?> </b>
		      	</h5>
			</div>
			<div class="col-6 mt-5">
				<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-home pr-1" aria-hidden="true"></i> Room Type :</b>
					<b class="ml-4" style="font-size: 18px;"> <?php echo $room ;?></b>
				</h5>
				<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-users pr-1" aria-hidden="true"></i> Number of Guests : </b>
		      		<b class="ml-4" style="font-size: 18px;"> <?php echo $nroom ;?> People </b>
		      	</h5>
		      	<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-taxi pr-1" aria-hidden="true"></i> Free PickUp ? </b>
		      		<b class="ml-4" style="font-size: 18px;"> <?php echo $pick ;?> </b>
		      	</h5>
		      	<h5 class="ml-5 p-2"><b class="heading"> <i class="fa fa-fighter-jet pr-1" aria-hidden="true"></i> Flight Number : </b>
		      		<b class="ml-4" style="font-size: 18px;"> <?php echo $flightn ;?> </b>
		      	</h5>
			</div>
			<p class="down mt-3">Take the screenshot of this for future reference !</p>
		</div>
		<br>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    

   

</body>
</html>
