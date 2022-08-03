<?php
$a = 0;
$users =["Cesar", "Retax", "Carlos"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycles</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < 10 ; $i++): ?> 
            <li><?= $i?></li>
        <?php endfor; ?>

        <?php while ($a <= 10): ?>
            <li>Enything</li>
        <?php $a++; endwhile; ?>    
    </ul>

    <h1>Users list:</h1>
    <ul>
        <?php foreach ($users as $username): ?>
            <li><?= $username; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>