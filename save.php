<?php
	
	session_start();

	if (!isset($_SESSION['username'])) {
	 	header('location:login.php');
	 } 

	 $con = mysqli_connect('localhost' , 'root' , 'root');

	 mysqli_select_db($con , 'tourist');

	 $_SESSION['success'] = "Details added successfully !";

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

    <link rel="stylesheet" type="text/css" href="details.css">
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
            <h1 class="px-6 py-3">Add Your Personal Information here</h1>

            <div class="bottom mx-5 my-4 p-5">

                <form method="post" id="SignupForm">
                    <fieldset>

                    	<h2 style="text-align: center; color: green;">
                    		<b> 
                    			<?php 
		                        	echo $_SESSION['success'];
		                        	unset($_SESSION['success']);
		                        ?> 
		                    </b>
		                </h2>
                        <hr><br>
                        <div class="row pl-5 pr-5">
                            <div class="col-12">
                                
                            </div>
                        </div>
                        
                        
                    </fieldset>

                </form>

                
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdn.rawgit.com/artoodetoo/formToWizard/v0.0.4/jquery.formtowizard.js"></script>

    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    

   

</body>
</html>
