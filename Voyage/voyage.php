<html>
<head>
<title>The Voyage News</title>
<link rel = "stylesheet" href="style.css">
</head>
<body>
<div class="begin">
<div class="size-box">
<div class = "box-botton">
<div id = "color-botton"></div>
<button type= "button" class="switch-botton" onclick = "login()">Log In</botton>
<button type= "button" class="switch-botton" onclick = "register()">Register</botton>
</div>
<form id = "login" class = "input-text">
<input type = "text" class = "inputting-text" placeholder = "User ID" required>
<input type = "password" class = "inputting-text" placeholder = "Enter Password" required>
<input type = "checkbox" class = "check-box"><span>Remember Password</span>
</br>
<a href="forgotindex.html" class="info-btn">Forgot Password</a>
<button type = "submit" class = "submit-botton">Log In</button>
</form>

<form id = "register" class = "input-text">
<input type = "text" class = "inputting-text" placeholder = "Name" required>
<input type = "text" class = "inputting-text" placeholder = "User ID" required>
<input type = "email" class = "inputting-text" placeholder = "Email ID" required>
<input type = "password" class = "inputting-text" placeholder = "Enter Password" required>
<input type ="password confirmation" class="inputting-text"placeholder="Password Confirmation" required>
<input type = "checkbox" class = "check-box"><span>I Agree Voyage News is my #1 News Outlet</span>
<button type = "submit" class = "submit-botton">Register</button>
</form>

</div>

</div>

<script src="script.js"></script>
</body>
</html>
