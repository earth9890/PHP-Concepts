<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes</title>
</head>

<body>
    <?php

    echo "<h1>" . "Variables" . "</h1>";
    $var1 = 10;
    echo "var1 = " . $var1 . "<br/>";

    echo "<h1>" . "String" . "</h1>";

    $var2 = "Hello Neeraj ";
    echo "\r\n var2 = " . $var2 . "<br/>";

    echo "My Name is {$var2}<br/>";

    $first = "First String ";
    $second = "Second String";
    $third = $first;
    $third .= $second;
    echo "Concanited string using .= {$third} <br/>";
    echo "lowercase : " . strtolower($third) . "<br/>";
    echo "UPPERCASE  : " . strtoupper($third) . "<br/>";
    echo "First letter Uppercase : " . ucfirst($third) . "<br/>";
    echo "Uppercase Words : " . ucwords($third) . "<br/>";
    echo "length : " . strlen($first) . "<br/>";
    echo "trim : " . $fourth = $first . trim($second) . "<br/>";
    echo "find : " . strstr($third, "Second") . "<br/>";
    echo "Replace by String : " . str_replace("Second", "Last", $third) . "<br/>";
    echo "repeat : " . $repeat = str_repeat($third, 2) . "<br/>";
    echo "substring : " . $substr = substr($third, 4, 7) . "<br/>";
    echo "find position : " . $fpos = strpos($third, "Second") . "<br/>";
    echo "find char : " . $fchar = strpos($third, 'F') . "<br/>";


    echo "<br/> <h1>" . "Numbers : Integers" . "</h1> <br/>";

    $one = 10;
    $two = 20;
    echo "$one + $two = " . $one + $two . "<br/>";
    echo "$one - $two = " . $one - $two . "<br/>";
    echo "$one * $two = " . $one * $two . "<br/>";
    echo "$one / $two = " . $one / $two . "<br/>";
    $one++;
    echo " Increment =  " . $one . "<br/>";
    $one--;
    echo "Decrement = " . $one . "<br/>";

    echo "<br/> <h1>" . "Numbers : Floating" . "</h1> <br/>";

    echo "Floating Point : " . $float = 3.14 . "<br/>";
    echo "Round : " . round(3.14) . "<br/>";
    echo "Ciel : " . ceil(3.14) . "<br/>";
    echo "Floor : " . floor(3.14) . "<br/>";
    echo "Abs : " . abs(100 - 200) . "<br/>";
    echo "sqrt : " . sqrt(16) . "<br/>";
    echo "rand : " . rand() . "<br/>";
    echo "rand 1 to 10: " . rand(1, 10) . "<br/>";
    echo "power: " . pow(2, 3) . "<br/>";

    echo "<br/> <h1>" . "Arrays" . "</h1> <br/>";

    $numericArray = array(10, 20, 30, 40);
    $associativeArray = array("name" => "John", "age" => 30, "city" => "New York");
    $mixedArray = array("apple", "banana", "color" => "red", "shape" => "round");


    echo '$numericArray = array(10, 20, 30, 40);' . "<br/>";
    echo '$ numericArray2 =  [10, 20, 30, 40];' . "<br/>";

    echo '$associativeArray = array("name" => "John", "age" => 30, "city" => "New York");' . "<br/>";
    echo '$associativeArray = ["name" => "John", "age" => 30, "city" => "New York"];' . "<br/>";

    echo '$mixedArray = array("apple", "banana", "color" => "red", "shape" => "round");' . "<br/>";
    echo '$mixedArray = ["apple", "banana", "color" => "red", "shape" => "round"];' . "<br/>";


    echo '$numericArray[0] = ' . $numericArray[0] . "<br/>";
    echo '$associativeArray["name"] = ' . $associativeArray["name"] . "<br/>";
    echo '$mixedArray[2] = ' . $mixedArray[2] . "<br/>";

    $numericArray[] = 50;
    $associativeArray["gender"] = "Male";

    foreach ($numericArray as $value) {
        echo $value . " ";
    }

    echo "<br/>";

    foreach ($associativeArray as $key => $value) {
        echo $key . ": " . $value . "<br/>";
    }
    echo "<br/>";


    foreach ($mixedArray as $element) {
        echo $element . " ";
    }
    echo "<br/>";

    echo 'Count $numericArray = ' . count($numericArray) . "<br/>";
    echo 'Min $numericArray = ' . min($numericArray) . "<br/>";
    echo 'Min $numericArray = ' . max($numericArray) . "<br/>";
    sort($numericArray);
    echo 'Sort $numericArray = ' . "<br/>";
    foreach ($numericArray as $value) {
        echo $value . " ";
    }
    echo "<br/>";

    rsort($numericArray);
    echo 'Reverse Sort $numericArray = ' . "<br/>";
    foreach ($numericArray as $value) {
        echo $value . " ";
    }

    echo "<br/>";
    $nums = implode(", ", $numericArray);
    echo 'Implode $numericArray = ' . "<br/>";

    foreach ($numericArray as $value) {
        echo $value . " ";
    }

    echo "<br/>";
    $numsArray = explode(", ", $nums);

    echo 'Explode $numericArray = ' . "<br/>";
    foreach ($numericArray as $value) {
        echo $value . " ";
    }
    echo "<br/>";


    echo "<br/> <h1>" . "Booleans" . "</h1> <br/>";

    $age = 25;
    $isAdult = ($age >= 18);
    echo 'Is age > 18 =' . "$isAdult" . "<br/>";
    $name = "NM";

    echo 'Is set boolean =' . isset($name) . "<br/>";
    echo 'Is  empty =' . empty($name) . "<br/>";
    unset($name);
    echo 'Is set boolean =' . isset($name) . "<br/>";
    echo 'Is  empty =' . empty($name) . "<br/>";



    echo "<br/> <h1>" . "Type Casting" . "</h1> <br/>";

    $one = "10";
    $two = 20;
    echo ' "10" + 20 = ' . $one + $two . "<br/>";
    $three = (int) $one;
    echo '$three =' . "$three = " . gettype($three) . "<br/>";

    echo 'Get Type =' . gettype($one) . "<br/>";
    settype($one, "integer");
    echo 'Get Type =' . gettype($one) . "<br/>";
    echo 'Is integer =' . is_integer($one) . "<br/>";
    echo 'Is array =' . is_array($numericArray) . "<br/>";
    echo 'Is array =' . is_array($one) . "<br/>";

    // declare(strict_types=1);
    
    echo "<br/> <h1>" . "Constants" . "</h1> <br/>";

    define("PI", 3.14);
    define("GREETING", "Hello, Neeraj!");

    echo 'Constant PI = ' . PI . "<br/>";
    echo 'Constant Greeting = ' . GREETING . "<br/>";

    const PI1 = 3.14;
    const GREETING1 = "Hello, world!";
    echo 'Constant PI1 = ' . PI1 . "<br/>";
    echo 'Constant Greeting1 = ' . GREETING1 . "<br/>";

























    ?>
</body>

</html>