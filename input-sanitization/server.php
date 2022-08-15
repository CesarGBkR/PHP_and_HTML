<?php

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentities = htmlentities($name);
$addslashes = addslashes($username);
$regex = preg_replace("/\d/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$age = filter_var($email, FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outputs</title>
</head>
<body>
    <p>Name:</p>
    <?=$htmlentities?>

    <p>Username:</p>
    <?=$addslashes?>

    <p>Username without numbers:</p>
    <?=$regex?>

    <p>Email:</p>
    <?=$email?>

    <p>Age:</p>
    <?=$age?>

</body>
</html>