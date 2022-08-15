<?php

require("./vendor/autoload.php");
use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject, $body, $email, $name, $html=false) {

    //Config server with Mailtrap
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '';
    $phpmailer->Password = '';

    // Send to
    $phpmailer->setFrom('contact@contact.com', 'My company');
    $phpmailer->addAddress($email, $name);  

    //Content
    $phpmailer->isHTML($html);
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    // Send email

    $phpmailer->send();
}