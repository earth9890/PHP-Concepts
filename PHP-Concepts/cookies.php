<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    // Retrieve the cookie value
    <?php

    setcookie("username", "Hari", time() + 3600, "/");

    if (isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
        echo "<p>Hello, $username!</p>";
    } else {
        echo "<p>Cookie not set.</p>";
    }
    ?>
</body>

</html>