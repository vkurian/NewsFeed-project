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
			<input type = "text" class = "inputting-text" placeholder = "User ID" name="usersUid" required>
			<input type = "password" class = "inputting-text" placeholder = "Enter Password" name="usersPwd" required>
			<input type = "checkbox" class = "check-box"><span>Remember Password</span>
        </br>
        <a href="../FORGOT PASSWORD/forgotindex.html" class="info-btn">Forgot Password</a>
        <button type = "submit" class = "submit-botton">Log In</button>
        </form>
		<form id = "register" class = "input-text">
		<input type = "text" class = "inputting-text" placeholder = "Name" name="name" required>
		<input type = "text" class = "inputting-text" placeholder = "User ID" name="userid" required>
		<input type = "email" class = "inputting-text" placeholder = "Email ID" name="email" required>
		<input type = "password" class = "inputting-text" placeholder = "Enter Password" name="password" required>
		<input type ="password" class="inputting-text"placeholder="Confirm Password" name="passwordConfirmation" required>
		<input type = "checkbox" class = "check-box"><span>I Agree Voyage News is my #1 News Outlet</span>
		<button type = "submit" class = "submit-botton">Register</button>
		</form>
		</div>
		</div>
		<script src="script.js"></script>
	</body>
</html>