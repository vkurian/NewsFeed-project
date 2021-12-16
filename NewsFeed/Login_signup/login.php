
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.0">
<title> PHP MYSQL - Search</title>
<link rel="stylesheet" href="profilestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
<section>
      <header>
        <h2><a href="#" class="logo">Profile</a></h2>
        <div class="navigation">
		
        </div>
      </header>
	  <div class="content">
        <div class="info">
	  <a class="info-btn" href ="../newsWeb/newsearch/preference.html">NEWS PAGE</a>
	  <a class="info-btn" href="../Forgot_password/forgotindex.html">Forgot Password</a>
	  <a class="info-btn" href="logout.php">Logout</a>
	  </div>
      </div>
	
</body>
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
				//header("location: ../newsWeb/newsearch/preference.html");
				?>
				<div class= "content">
					<h4 class = "logo">Name: <?php echo $data['userName']?></h4>
					<h4 class = "logo">User Name: <?php echo $data['userUid']?></h4>
					<h4 class = "logo">Email Address: <?php echo $data['userEmail']?></h4>
					</div>
					<?php
				$stmt -> close();
				$conn -> close();
	
			}
		
		
		else{
			header("location: ../notMatching/notMatch.html");
		}
	}
	}
	
?>
</html>