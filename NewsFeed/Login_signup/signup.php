
<?php

	$name = $_POST['userName'];
	$userName = $_POST['userUid'];
	$email = $_POST['userEmail'];
	$pwd = $_POST['userPassword'];
	$pwdRepeat = $_POST['pwdRepeat'];
	require_once 'functions.php';
	$conn = new mysqli('localhost', 'root','','users');
	if($conn->connect_error){
		die('Connection Failed: '.$conn->connect_error);
	}
	else{
		if(pwdMatch($pwd,$pwdRepeat)!==false){ //checking that both passwords match using our own function 
			echo "<h1> password do not match or not strong<h1>"; //if any of these functions is TRUE that means USER isnt able to SIGN UP
            exit();
		}//SUCCESSFULLY ABLE TO SIGN UP USER
		$stmt = $conn->prepare("INSERT INTO profiles(userName, userUid, userEmail, userPassword) values(?,?,?,?)");
		$stmt -> bind_param("ssss",$name, $userName, $email, $pwd);
		$stmt -> execute();
		echo "Account created successfully";
		header("location: voyage.php");
		$stmt -> close();
		$conn -> close();
	}


?>
