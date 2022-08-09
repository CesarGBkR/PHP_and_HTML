<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input types</title>
</head>
<body>
    <form action="server.php" method="post" enctype="multipart/form-data">
    <!-- Simple Input -->
    <!-- <label for="name">Name:</label>
    <input type="text" name="name" id="name"> -->

    <!-- Array -->
    <!-- <label>Persons:</label>
    <input type="text" name="persons[]" id="persons">
    <input type="text" name="persons[]" id="persons">
    <input type="text" name="persons[]" id="persons"> -->

    <!-- Asociative -->
    <!-- <label>Persons:</label>
    <input type="text" name="persons[name]" id="persons">
    <input type="email" name="persons[email]" id="persons">
    <input type="number" name="persons[age]" id="persons"> -->

    <!-- Checkbox -->

    <!-- <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Clicked">
    <input type="checkbox" name="list3"> -->

    <!-- Radios -->

    <!-- <label for="MX">México</label>
    <input type="radio" name="country" value="MX">
    <label for="COL">Colombia</label>
    <input type="radio" name="country" value="COL">
    <label for="USA">United States</label>
    <input type="radio" name="country" value="USA"> -->

    <!-- Multi files -->

    <label for="galery">Upload your pictures:</label>
    <input type="file" multiple name="galery[]" id="galery">

    <button type="submit">Send</button>
    
</form>
</body>
</html>