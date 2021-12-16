<html>
<head>
<title>The Voyage News</title>
<link rel = "stylesheet" href="forgotStyle.css">
</head>
<body>
<div class="begin">
<div class="size-box">
<div class = "box-botton">
<h1 class="forgot">Forgot Password</h1>
<form class="form-resetpwd" action="includes/reset-request.inc.php" method="post">
</div>
<form id = "login" class = "input-text">
<input type = "email" class = "inputting-text" placeholder = " Enter Email" required>	
<button type = "submit" class = "submit-botton">Reset Password</buton>
</form>

<?php
        if (isset($_GET["reset"])) {
          if ($_GET["reset"] == "success") {
            echo '<p class="signupsuccess">Check your e-mail!</p>';
          }
        }
      ?>

</form>
</div>

</div>
</body>
</html>

