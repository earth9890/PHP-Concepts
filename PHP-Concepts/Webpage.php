<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Webpage</title>
</head>

<body>
    <?php
    const b = "<br/>";
    const h = "<h1>";
    const hh = "</h1>";

    echo h . "Building Webpage" . hh;

    $id = $_GET['id'];
    echo "The id is recieved through URL: " . $id . b;
    echo "The name is recieved through URL: " . $_GET['name'] . b;
    ?>
</body>

</html>