
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
		if(pwdMatch($pwd,$pwdRepeat)!==false){
			echo "<h1> password do not match or not strong<h1>";
            exit();
		}
		$stmt = $conn->prepare("INSERT INTO users(userName, userUid, userEmail, userPassword) values(?,?,?,?)");
		$stmt -> bind_param("ssss",$name, $userName, $email, $pwd);
		$stmt -> execute();
		echo "<img src='welcome.png'>";

		$stmt -> close();
		$conn -> close();
	}


?>