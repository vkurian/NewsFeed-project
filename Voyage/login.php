<?php
	$userName = $_POST['userUid'];
	$pwd = $_POST['userPassword'];
	$conn = new mysqli('localhost', 'root','','users');
	if($conn->connect_error){
		die('Connection Failed: '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("SELECT * FROM users WHERE userUid = ?");
		$stmt -> bind_param("s", $userName);
		$stmt -> execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows>0){
			$data = $stmt_result->fetch_assoc();
			if($data['userPassword'] === $pwd){
				echo "<center><video controls autoplay> <source src='logo.mp4' type='video/mp4'></video></center>";
			}
		
		
		else{
			echo "Your username or password does not exist in a our database! Try again...";
		}
	}

	}
?>