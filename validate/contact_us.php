<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//your database Queries
    $error = array();
    $err = array();
    $fileError = array();


    if(isset($_POST['submit'])){
        $name = ucfirst(trim($_POST['full_name']));
        $subject = ucfirst(trim($_POST['subject']));
        $email = ucfirst(trim($_POST['email']));
        $number = ucfirst(trim($_POST['number']));
        $message = ucfirst(trim($_POST['comment']));
        if(empty($name) && empty($subject) && empty($email) && empty($number) && empty($message)){
            $error['all']= "please fill in field";
        }else{
            if(empty($name)){
                array_push($error, "Enter the full name");
            }if(empty($subject)){
                array_push($error, "Enter the subject matter");
            }if(empty($email)){
                array_push($error, "Enter your email address");
            }if(empty($number)){
                array_push($error, "Enter your phone number");
            }if(empty($message)){
                array_push($error, "Enter the reason for this mail");
            }
        }if(@$admin == 0){
            $id= $_SESSION['ID'];
            // $otp = rand(10,1000000);
            $contact_query = "SELECT * FROM users WHERE ID = '$id' AND email = '$email'";
            $contact_result = mysqli_query($connect, $contact_query);

            $contact_sql = "INSERT INTO contact (user_id,full_name,subject,email,number,comment) 
                    VALUES ('$id','$name','$subject','$email','$number','$message')";
            @$result = mysqli_query($connect,$contact_sql);
        }

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'oreadekoya2002@gmail.com';                     //SMTP username
    $mail->Password   = 'swhkrazhjthfwknk';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('oreadekoya2002@gmail.com', 'Mailer');
    $mail->addAddress($email, $name);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('exploitechs@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error";
}
}
?>