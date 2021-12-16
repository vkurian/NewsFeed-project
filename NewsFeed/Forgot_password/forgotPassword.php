<?php include 'changePassword.php' ?>
<!DOCTYPE html> 
<html>
	<head> 
		<meta charset ="utf-8"> 
		<title>Change Password</title>
        <link rel = "stylesheet" href="forgotStyle.css">
	</head>
	<body>
    <div class="begin">
    <div class="size-box">
    <div class = "box-botton">
    <h1 class="forgot">Forgot Password</h1>
    </div>
    <form id = "login" class = "input-text" action="" method="post">
			<input type = "email" class = "inputting-text" placeholder = "Enter Email" name="email" required>
			<input type = "password" class = "inputting-text" placeholder = "Enter New Password" name="newPassword" required>
        	<button type = "submit" class = "submit-botton" name="change">Change</button>
	</form>
</body>
</html>
