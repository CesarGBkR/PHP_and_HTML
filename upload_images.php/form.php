<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia Form</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    
    <label for="name">Image:</label>
    <input type="file" name="image" id="image">

    <button type="submit">Send</button>
    
</form>
</body>
</html>