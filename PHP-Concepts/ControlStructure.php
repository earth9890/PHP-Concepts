<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structure in PHP</title>
</head>

<body>
    <h1> Control Structure in PHP </h1>
    <h2>Logical Expressions </h2>


    <?php
    const b = "<br/>";
    const h = "<h1>";
    const hh = "</h1>";
    $temp = "";
    $one = 3;
    $two = 4;


    echo h . "if, else and elseif " . hh;
    if ($one == $two) {
        echo "$one and $two are equal";
    } elseif ($one > $two) {
        echo "$one is greater than $two";
    } else {
        echo "$two is greater that $one" . b;
    }

    $age = 25;
    $license = true;
    $indian = true;
    $passport = true;


    if ($age > 25 and $license == true) {
        echo "You are eligible for driving" . b;
    } else {

        echo "You are not eligible for driving" . b;
    }
    if ($age > 18 and $indian) {
        echo "You are eligible for voting in India " . b;
    } else {

        echo "You are not eligible for voting in India" . b;
    }
    if ($license || $passport) {

        echo "Your KYC done...";
    } else {
        echo "You dont have proper documents for KYC" . b;
    }

    echo h . "switch " . hh;
    $day = "Tuesday";

    switch ($day) {
        case 'Monday':
            echo "Today is Monday." . b;
            break;
        case 'Tuesday':
            echo "Today is Tuesday." . b;
            break;
        default:
            echo "Today is not Monday or Tuesday." . b;
            break;
    }
    echo h . "Loops " . hh;
    echo "<h2>" . "while loop" . "</h2>";

    $count = 0;
    while ($count <= 10) {
        echo "count = $count" . b;
        $count++;
    }
    echo "After loop count = $count" . b;

    echo "<h2>" . "for loop" . "</h2>";

    for ($i = 0; $i < 11; $i++) {
        echo "i = $i" . b;
    }

    echo "<h2>" . "foreach loop (works for arrays only) " . "</h2>";

    $book_price = [20, 30, 80, 10, 5, 100];
    foreach ($book_price as $price) {
        echo "Book price = $price" . b;
    }
    $book_price = ["a" => "20", "b" => "30", "c" => "80", "d" => "10"];

    foreach ($book_price as $book => $price) {
        echo "Book price of $book = $price" . b;

    }
    echo "<h2>" . "continue and break" . "</h2>";

    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            echo "I am going to skip and continue" . b;
            continue;
        }
        echo "i = $i" . b;
        if ($i == 9) {
            echo "I am going to break the loop earlier" . b;
            break;
        }

    }

    echo "<h2>" . "Loops : Pointers" . "</h2>";
    $i = 1;
    echo "i = {$i} =  current(book_price) = " . current($book_price) . b;
    next($book_price);
    $i++;
    echo "i = {$i} = current(book_price) = " . current($book_price) . b;
    $i++;
    next($book_price);
    echo "i = {$i} = current(book_price) = " . current($book_price) . b;




    echo "<h2>" . "Loops : while loop using pointers" . "</h2>";
    $i = 1;
    while ($price = current($book_price)) {
        echo "i = {$i} = Book Price = $price " . b;
        $i++;
        next($book_price);

    }


    ?>
</body>

</html>



<!-- <?php
// Example 2D array
$twoDArray = array(
    array("John", "Doe", 25),
    array("Jane", "Smith", 30),
    array("Mike", "Johnson", 40)
);

// Traversing through the 2D array
foreach ($twoDArray as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

// Example JSON string representing an array of arrays (like objects)
$jsonString = '[
    {"name": "John", "age": 25},
    {"name": "Jane", "age": 30},
    {"name": "Mike", "age": 40}
]';

// Decoding JSON string into a PHP array
$arrayFromJson = json_decode($jsonString, true);

// Traversing through the array of arrays (like objects)
foreach ($arrayFromJson as $object) {
    foreach ($object as $key => $value) {
        echo "$key: $value ";
    }
    echo "<br>";
}
?>
 -->