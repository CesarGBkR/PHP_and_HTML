<?php
    $multiplication = [];
    for ($i=1; $i <= 10; $i++){
        $result = 9 * $i;
        $text = "9 x $i = $result" ;
        array_push($multiplication, $text);
    }
// echo "<pre>";
// print_r($multiplication);
// echo "</pre>";

// die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactor</title>
</head>
<body>
    <h1>Multiplication of 9</h1>

    <ul>
        <?php foreach ($multiplication as $value):?>
            <li><?=$value?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>