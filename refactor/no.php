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
        <?php
        
        for ($i=0; $i < 10; $i++) {
            $j=$i+1; 
            echo "<li>". "9 x $j =" .(9 * $j) ."</li>";
        }

        ?>
    </ul>
</body>
</html>