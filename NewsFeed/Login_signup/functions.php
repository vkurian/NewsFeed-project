<?php
function invalidUid($userName){ 
	$result; 
	if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){
	$result = true; 

	}
	else{
		$result = false; 
	}

	return $result;
}
function pwdMatch($pwd,$pwdRepeat){ //checking if both passwords entered by the user MATCH 
	$result; 
	if($pwd !== $pwdRepeat){
	$result = true; 

	}
	if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd)) {//Checking if the password contains this
 		echo "Password must be at least 8 characters, a symbol, and uppercase";
 		return true;
	}
	else{
		$result = false; 
	}

	return $result;
}
