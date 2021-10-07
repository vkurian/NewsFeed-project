<!DOCTYPE html> 
<html>
	<head> 
		<meta charset ="utf-8"> 
		<title>The Voyage News</title>
	</head>
	<body>
		<link rel = "stylesheet" href="style.css">
		<div class="begin">
		<div class="size-box">
		<div class = "box-botton">
		<div id = "color-botton"></div>
		<button type= "button" class="switch-botton" onclick = "login()">Log In</botton>
		<button type= "button" class="switch-botton" onclick = "register()">Register</botton>
		</div>
		<form id = "login" class = "input-text" method="POST" action="login.php">
			<input type = "text" class = "inputting-text" placeholder = "User ID" name="userUid" required>
			<input type = "password" class = "inputting-text" placeholder = "Enter Password" name="userPassword" required>
			<input type = "checkbox" class = "check-box"><span>Remember Password</span>
			<button type = "submit" name="submit "class = "submit-botton">Log In</button>
		</form>
		<form id = "register" class = "input-text" method="post" action="signup.php">
		<input type = "text" class = "inputting-text" placeholder = "Name" name="userName" required>
		<input type = "text" class = "inputting-text" placeholder = "User ID" name="userUid" required>
		<input type = "email" class = "inputting-text" placeholder = "Email ID" name="userEmail" required>
		<input type = "password" class = "inputting-text" placeholder = "Enter Password" name="userPassword" required>
		<input type ="password" class="inputting-text"placeholder="Confirm Password" name="pwdRepeat" required>
		<input type = "checkbox" class = "check-box"><span>I Agree Voyage News is my #1 News Outlet</span>
		<button type = "submit" name = "submit" class = "submit-botton">Register</button>
		</form>
		</div>
		</div>
		<script src="script.js"></script>
	</body>
</html>
