<?php 

	session_start();

	$con = mysqli_connect('localhost' , 'root' , 'root');

	mysqli_select_db($con , 'tourist');

	$name = $_POST['name'];
	$pass = $_POST['password'];

	$s = "SELECT * FROM customer where name = '$name'";

	$result = mysqli_query($con , $s);

	$num = mysqli_num_rows($result);

	if ($num !== 1){
		$reg = "INSERT INTO customer (name , password ) VALUES ('$name' , '$pass') ";
		mysqli_query($con , $reg);
		header('location:login.php');
		return;
	}
	elseif (strlen($name) < 1 || strlen($pass) < 1 ) {
		$_SESSION['error'] = "User name and password are required !";
		header('location:signup.php');
		return;
	}
	else{
		$_SESSION['error'] = " Username Already Taken !";
		header('location:signup.php');
		return;
	}
	
?>