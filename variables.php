<?php
    $usersPHP = array(

        array(
            "id" => 0,
            "username" => "root",
        ),
        array(
            "id" => 1,
            "username" => "Cesar",
        ),
        array(
            "id" => 2,
            "username" => "Pedro",
        ),

    );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables from PHP to HTML</title>
</head>
<body>
    <h1>Hola</h1>
    <p id='user'></p>
    <script>
        let users = JSON.parse('<?= json_encode($usersPHP)?>');
        console.log(users[0].username)
        document.getElementById("user").innerHTML = users[0].username;
    </script>
    <p></p>
</body>
</html>