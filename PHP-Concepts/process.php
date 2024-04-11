<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing</title>
</head>
<body>
    
<?php

// Retrieve the form values
$name = $_POST['username'];
$password = $_POST['password'];

// Display the form values
echo "Name: " . $name . "<br>";
echo "Password: " . $password . "<br>";
?>
</body>
</html>