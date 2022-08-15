<?php

require("mail.php");

function validate($name, $email, $subject, $message, $form) {
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";

if (isset($_POST["form"]) ){

    if(validate(...$_POST) ) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $form = $_POST["form"];

        $body = "$name <$email> Send you: <br></br>
        $message";

        sendMail($subject, $body, $email, $name, true);
        
        // Send email

        $status = "success";

    
    }
    else {
        $status = "danger";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Contact form</title>
</head>
<body>
    <?php if($status == "success"): ?>
        <div class="alert success">
        <span>Success message send</span>
    </div>
    <?php else:?>
    <div class="alert danger">
        <span>There was a problem</span>
    </div>
    <?php endif;?>

    <form action="./" method="post">

        <h1> Contact Us </h1>

        <div class="input-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        
        <div class="input-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
        </div>
        
        <div class="input-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="form" type="submit">Send</button>
        </div>

        <div class="contact-info">
            <div class="info">
                <span>13 Saw Mill Circle</span>
            </div>

            <div class="info">
                <span>+1 12345567</span>
            </div>
        </div>

    </form>
</body>
</html>