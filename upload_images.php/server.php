<?php

// echo "<pre>";
// var_dump($_FILES);
// echo "</pre>";


$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$submit_path = "images/$basename";


move_uploaded_file($image, $submit_path);

echo $basename;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proof</title>
</head>
<body>
    <img src="<?= $submit_path?>" alt="<?= $basename?>">
</body>
</html>