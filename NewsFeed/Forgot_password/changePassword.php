<?php
    if(isset($_GET['code'])) {
        $code = $_GET['code'];
        $conn = new mysqli('localhost', 'root', '', 'users');
        if($conn->connect_error){
            die('Could not connect to the database');

        }
        $veryfyQeury = $conn->query("SELECT * FROM profiles WHERE code = '$code'");
        if($veryfyQeury->num_rows == 0){
            header("Location: ../NewsFeed/Login_signup/voyage.php");
            exit();
        }
        if(isset($_POST['change'])){
            $email = $_POST['email'];
            $newPassword = $_POST['newPassword'];
            
            $changeQuery = $conn->query("UPDATE profiles SET userPassword = '$newPassword' WHERE userEmail = '$email' and code = '$code'");

            if($changeQuery){
                header("Location: success.html");
            }

        }
        $conn->close();
     }
    else{
        echo 'Password not changed';
        exit();

        
    }


?>