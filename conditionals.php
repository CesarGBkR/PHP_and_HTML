
<?php
    $a = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>

    <!-- bad practice -->
    <h1>Bad practice code</h1>
    <?php 
        if ($a) {
            echo "<p>a is true</p>";
        }
        else {
            echo "<p>a is false</p>";
        }
    ?>
    <br>
    <h1>Aceptable code</h1>
    <!-- aceptable -->
    <?php if($a): ?>
        <p>a is true</p>
    <?php else: ?>
        <p>a is false</p>
    <?php endif; ?>

</body>
</html>