<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <form action="server.php" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
        
        <button type="submit">Send</button>
    </form>
</body>
</html>