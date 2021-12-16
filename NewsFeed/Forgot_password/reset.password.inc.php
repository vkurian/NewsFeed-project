<?php
//checking if the user got to this page in a valid way
if(isset($_POST["reset-password-submit"])){

$selector = $_POST["selector"];
$validator = $_POST["validator"];
$password = $_POST["pwd"];
$passwordRepeat = $_POST["pwd-repeat"];

//check for error handlers 

if (empty($password) || empty($passwordRepeat)) {
    header("Location:../create-new-password.php?newpwd=empty");
    exit();
}elseif($password != $passwordRepeat){
    header("Location:../create-new-password.php?newpwd=pwdnotsame");
exit();
}

$currentDate = date("U");

require 'dbh.inc.php';

//select the token from inside the database

$sql ="SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >=?";


}else{
    header("Location:../index.php")
}