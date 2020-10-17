<?php
	
	session_start();

	if (!isset($_SESSION['username'])) {
	 	header('location:login.php');
	 } 

	 $con = mysqli_connect('localhost' , 'root' , 'root');

	 mysqli_select_db($con , 'tourist');

	 $_SESSION['success'] = "Details added successfully !";

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

		<div class="row">
		  <div class="col-6">
		    <div class="card bottom">
		      <div class="card-body">
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-user" aria-hidden="true" style="color: #0000ff; "></i></b> 
		      			<i class="ml-2 pl-4"> <?php echo $name ;?></i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-envelope" aria-hidden="true" style="color: #0000ff; "></i></i></b> 
		      			<i class="ml-2 pl-4"> <?php echo $email ;?></i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-phone" aria-hidden="true" style="color: #0000ff; "></i></b> 
		      			<i class="ml-2 pl-4"> <?php echo $phone ;?> </i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-key" aria-hidden="true" style="color: #0000ff; "></i></b> 
		      			<i class="ml-2 pl-4"> <?php echo $password ;?> </i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-map-marker-alt" aria-hidden="true" style="color: #0000ff; "></i> Address :</b> 
		      			<i class="ml-2 pl-4"> <?php echo $address ;?>, <?php echo $city ;?> <br> <?php echo $zip ;?> , <?php echo $state ;?> , <?php echo $country ;?></i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fas fa-fingerprint pr-1" aria-hidden="true" style="color: #0000ff; "></i> Aadhar Number :</b> 
		      			<i class="ml-2 pl-4"> <?php echo $aadhar ;?> </i>
		      		</p>
		      	</div>
		      	
		      </div>
		    </div>
		  </div>
		  <div class="col-6">
		    <div class="card bottom">
		      <div class="card-body">
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-home pr-1" aria-hidden="true" style="color: #0000ff; "></i> Room Type :</b> 
		      			<i class="ml-2 pl-4"> <?php echo $room ;?> </i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-users pr-1" aria-hidden="true" style="color: #0000ff; "></i> Number of Guests : </b> 
		      			<i class="ml-2 pl-4"> <?php echo $nroom ;?> </i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fas fa-plane-arrival pr-1" aria-hidden="true" style="color: #0000ff; "></i> Arrival Time : </b> 
		      			<i class="ml-2 pl-4"> <?php echo $arrival ;?> </i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fas fa-plane-departure pr-1" aria-hidden="true" style="color: #0000ff; "></i> Depature Time : </b> 
		      			<i class="ml-2 pl-4"> <?php echo $departure ;?></i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-taxi pr-1" aria-hidden="true" style="color: #0000ff; "></i> Free PickUp? </b> 
		      			<i class="ml-2 pl-4"> <?php echo $pick ;?> </i>
		      		</p>
		      	</div>
		      	<div class="col-12">
		      		<p class="p-3" style="font-size: 20px;">
		      			<b><i class="fa fa-fighter-jet pr-1" aria-hidden="true" style="color: #0000ff; "></i> Flight Number : </b> 
		      			<i class="ml-2 pl-4"> <?php echo $flightn ;?> </i>
		      		</p>
		      	</div>
		      	<p style="text-align: center; font-size: 13px; color: red;">Take the screenshot of this for future reference !</p>
		      </div>
		    </div>
		  </div>
		</div>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    

   

</body>
</html>
