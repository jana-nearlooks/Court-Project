<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';

require 'vendor/autoload.php';

function sendEmail($toEmail, $subject, $html){

    $mail = new PHPMailer();
    // $mail->SMTPDebug = 2;  
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'balakannangbk1@gmail.com'; 
    $mail->Password = 'fvwklfixteiveakd';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('balakannangbk1@gmail.com');
    $mail->addAddress($toEmail);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $html;

    if($mail->send()){
        return true;
    }else{
        return false;
    }
}
date_default_timezone_set('Asia/Kolkata');

function formatDate($datetimeStamp){
    $dateTime = new DateTime($datetimeStamp);
    return $dateTime->format('d-M-Y h:m');
}

function checkEmailExists($email,$connection){

    $sql = "select email from users where email = '$email'";

    $queryExec = mysqli_query($connection, $sql);
    $exists = mysqli_fetch_assoc($queryExec);
    if($exists){
        return true;
    }
    return false;
}


?>