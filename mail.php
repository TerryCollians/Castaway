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
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'johnylikonsky@gmail.com';                     //SMTP username
    $mail->Password   = 'damwdcowyranjfif';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('johnylikonsky@gmail.com', 'Mailer');
    $mail->addAddress('johnylikonsky@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('johnylikonsky@gmail.com');               //Name is optional
    $mail->addReplyTo('johnylikonsky@gmail.com', 'Information');
    $mail->addCC('johnylikonsky@gmail.com');
    $mail->addBCC('johnylikonsky@gmail.com');

   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Castaway Letter';
    $mail->Body    = '' .$name . ' sent a subscription request ' . '<br>His mail: ' .$email;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "Form has been sent!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}