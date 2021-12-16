<?php
    if(isset($_POST['reset'])){
        $email = $_POST['email'];
    }
    else{
        exit();
    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'voyagenewsoutlet@gmail.com';                     //SMTP username
        $mail->Password   = '2018384831Oo';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('voyagenewsoutlet@gmail.com', 'VOYAGE NEWS OUTLET');
        $mail->addAddress($email);     //Add a recipient
        $code = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTWXYZ'),0,10);

    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'RESET PASSWORD';
        $mail->Body    = 'To reset your password click <a href="http://localhost/NewsFeed/Forgot_password/forgotPassword.php?code='.$code.'">here. </a></br>Reset your password within 24 hours.';
        $conn = new mysqli('localhost', 'root', '', 'users');

        if($conn->connect_error){
            die('Could not connect to the database.');
        }
        $verifyQuery = $conn->query("SELECT * FROM profiles WHERE userEmail = '$email'");
        if($verifyQuery->num_rows){
            $codequery = $conn->query("UPDATE profiles SET code = '$code' WHERE userEmail = '$email'");
            $mail->send();
            echo 'Message has been sent, check your email.';
        }
        $conn->close();
    
    } 
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>