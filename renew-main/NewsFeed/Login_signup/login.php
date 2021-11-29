<?php
	$userName = $_POST['userUid'];
	$pwd = $_POST['userPwd'];
	$conn = new mysqli('localhost', 'root','','users');//
//Conn variable is what connects to the database
	if($conn->connect_error){
		die('Connection Failed: '.$conn->connect_error);//shows if an error happened and what error it was
	}
	else{
		$stmt = $conn->prepare("SELECT * FROM profiles WHERE userUid = ?"); //preparing my select table from the users to access userid
		$stmt -> bind_param("s", $userName);
		$stmt -> execute();
		$stmt_result = $stmt->get_result();//The result to check if the username already exists in the database
		if($stmt_result->num_rows>0){
			$data = $stmt_result->fetch_assoc();//if num of rows is greater than 0 
			if($data['userPassword'] === $pwd){ //check if the pwd from database is matching the password user input
				header("location: ../newsWeb/index.html");
				$stmt -> close();
				$conn -> close();
	
			}
		
		}
		else{
			header("location: ../notMatching/notMatch.html");
		}
	}

	
?>
