<?php 

	session_start();

	$con = mysqli_connect('localhost:3307' , 'root' , 'root');

	mysqli_select_db($con , 'tourist');
	
	$name = $_POST['name'];
	$pass = $_POST['password'];

	$s = "SELECT * FROM customer where name = '$name' && password = '$pass' ";

	$result = mysqli_query($con , $s);

	$num = mysqli_num_rows($result);

	if ($num == 1){
		$_SESSION['username'] = $name;
		header('location:location.php');
		return;
	}
	elseif (strlen($name) < 1 || strlen($pass) < 1 ) {
		$_SESSION['error'] = "User name and password are required !";
		header('location:login.php');
		return;
	}
	elseif ($name !== name && $pass !== password) {
		$_SESSION['error'] = " You're not registered ! ";
		header('location:login.php');
		return;
	}
	else {
		$_SESSION['error'] = "Incorrect password !";
		header('location:login.php');
		return;
	}

?>