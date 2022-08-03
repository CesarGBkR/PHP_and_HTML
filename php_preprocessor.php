<?php
$nombre = "Cesar"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with HTML processor</title>
</head>
<body>
    <h3>writed with HTML</h3>
    <br>
    <?php echo "<b>Writed with PHP and echo command</b>"; ?>
    <br>
    <?= "<i>Writed with PHP without commands<i>"?>
    <h3>Hi <?=$nombre?> this is printed with HTML and PHP variable</h3>
</body>
</html>