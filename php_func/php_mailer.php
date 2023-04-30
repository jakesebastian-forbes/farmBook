<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '.\dependencies\phpmailer\vendor\autoload.php';
require 'generate_otp.php';

function send_otp($send_to_mail,$send_to_name){

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 3;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'farmbook.ph.co@gmail.com';                     //SMTP username
    $mail->Password   = 'j0zTn6f3PX4bGVyY';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('farmbook.ph.co@gmail.com', 'Farmbook');

//https://app.sendinblue.com/settings/keys/smtp
    $mail->addAddress($send_to_mail);     //Add a recipient


    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'OTP code for account confirmation';
    $mail->Body    = 'Hi '. ucwords($send_to_name) .'! <br> Your OTP code is : <b>'.generateNumericOTP(7).'</b> .
    Please do not share this code to anyone. <br> This code will expire in 10 minutes. ';
    // $mail->AltBody = '';

 //send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: '. $mail->ErrorInfo;
 } else {
    echo 'Message sent!';
 }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// https://app.sendinblue.com/marketing-dashboard

// another_try
// xsmtpsib-e4107c6993eb3e98b0d3182265d82030e0d6ec38244725606f6c197bc12e11ca-7s6yKU3NhwTJSq1X

// sendgrid
// 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
}

send_otp('gracenote0323@gmail.com', 'jake sebastian forbes');
?>