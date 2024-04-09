<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes in PHP</title>
</head>

<body>
    <h1>Datatypes in PHP</h1>

    <?php
    const b = "<br/>";
    const h = "<h1>";
    const hh = "</h1>"; 
    echo h . "Variables" . hh;
    $var1 = 10;
    echo "var1 = " . $var1 . b;

    echo h . "String" . hh;

    $var2 = "Hello Neeraj ";
    echo "\r\n var2 = " . $var2 . b;

    echo "My Name is {$var2} <br/>";

    $first = "First String ";
    $second = "Second String";
    $third = $first;
    $third .= $second;
    echo "Concanited string using .= {$third} <br/>";
    echo "lowercase : " . strtolower($third) . b;
    echo "UPPERCASE  : " . strtoupper($third) . b;
    echo "First letter Uppercase : " . ucfirst($third) . b;
    echo "Uppercase Words : " . ucwords($third) . b;
    echo "length : " . strlen($first) . b;
    echo "trim : " . $fourth = $first . trim($second) . b;
    echo "find : " . strstr($third, "Second") . b;
    echo "Replace by String : " . str_replace("Second", "Last", $third) . b;
    echo "repeat : " . $repeat = str_repeat($third, 2) . b;
    echo "substring : " . $substr = substr($third, 4, 7) . b;
    echo "find position : " . $fpos = strpos($third, "Second") . b;
    echo "find char : " . $fchar = strpos($third, 'F') . b;


    echo "<br/> <h1>" . "Numbers : Integers" . "</h1> <br/>";

    $one = 10;
    $two = 20;
    echo "$one + $two = " . $one + $two . b;
    echo "$one - $two = " . $one - $two . b;
    echo "$one * $two = " . $one * $two . b;
    echo "$one / $two = " . $one / $two . b;
    $one++;
    echo " Increment =  " . $one . b;
    $one--;
    echo "Decrement = " . $one . b;

    echo "<br/> <h1>" . "Numbers : Floating" . "</h1> <br/>";

    echo "Floating Point : " . $float = 3.14 . b;
    echo "Round : " . round(3.14) . b;
    echo "Ciel : " . ceil(3.14) . b;
    echo "Floor : " . floor(3.14) . b;
    echo "Abs : " . abs(100 - 200) . b;
    echo "sqrt : " . sqrt(16) . b;
    echo "rand : " . rand() . b;
    echo "rand 1 to 10: " . rand(1, 10) . b;
    echo "power: " . pow(2, 3) . b;

    echo "<br/> <h1>" . "Arrays" . "</h1> <br/>";

    $numericArray = array(10, 20, 30, 40);
    $associativeArray = array("name" => "John", "age" => 30, "city" => "New York");
    $mixedArray = array("apple", "banana", "color" => "red", "shape" => "round");


    echo '$numericArray = array(10, 20, 30, 40);' . b;
    echo '$ numericArray2 =  [10, 20, 30, 40];' . b;

    echo '$associativeArray = array("name" => "John", "age" => 30, "city" => "New York");' . b;
    echo '$associativeArray = ["name" => "John", "age" => 30, "city" => "New York"];' . b;

    echo '$mixedArray = array("apple", "banana", "color" => "red", "shape" => "round");' . b;
    echo '$mixedArray = ["apple", "banana", "color" => "red", "shape" => "round"];' . b;


    echo '$numericArray[0] = ' . $numericArray[0] . b;
    echo '$associativeArray["name"] = ' . $associativeArray["name"] . b;
    echo '$mixedArray[2] = ' . $mixedArray[2] . b;

    $numericArray[] = 50;
    $associativeArray["gender"] = "Male";

    foreach ($numericArray as $value) {
        echo $value . " ";
    }

    echo b;

    foreach ($associativeArray as $key => $value) {
        echo $key . ": " . $value . b;
    }
    echo b;


    foreach ($mixedArray as $element) {
        echo $element . " ";
    }
    echo b;

    echo 'Count $numericArray = ' . count($numericArray) . b;
    echo 'Min $numericArray = ' . min($numericArray) . b;
    echo 'Min $numericArray = ' . max($numericArray) . b;
    sort($numericArray);
    echo 'Sort $numericArray = ' . b;
    foreach ($numericArray as $value) {
        echo $value . " ";
    }
    echo b;

    rsort($numericArray);
    echo 'Reverse Sort $numericArray = ' . b;
    foreach ($numericArray as $value) {
        echo $value . " ";
    }

    echo b;
    $nums = implode(", ", $numericArray);
    echo 'Implode $numericArray = ' . b;

    foreach ($numericArray as $value) {
        echo $value . " ";
    }

    echo b;
    $numsArray = explode(", ", $nums);

    echo 'Explode $numericArray = ' . b;
    foreach ($numericArray as $value) {
        echo $value . " ";
    }
    echo b;


    echo "<br/> <h1>" . "Booleans" . "</h1> <br/>";

    $age = 25;
    $isAdult = ($age >= 18);
    echo 'Is age > 18 =' . "$isAdult" . b;
    $name = "NM";

    echo 'Is set boolean =' . isset($name) . b;
    echo 'Is  empty =' . empty($name) . b;
    unset($name);
    echo 'Is set boolean =' . isset($name) . b;
    echo 'Is  empty =' . empty($name) . b;



    echo "<br/> <h1>" . "Type Casting" . "</h1> <br/>";

    $one = "10";
    $two = 20;
    echo ' "10" + 20 = ' . $one + $two . b;
    $three = (int) $one;
    echo '$three =' . "$three = " . gettype($three) . b;

    echo 'Get Type =' . gettype($one) . b;
    settype($one, "integer");
    echo 'Get Type =' . gettype($one) . b;
    echo 'Is integer =' . is_integer($one) . b;
    echo 'Is array =' . is_array($numericArray) . b;
    echo 'Is array =' . is_array($one) . b;

    // declare(strict_types=1);
    
    echo "<br/> <h1>" . "Constants" . "</h1> <br/>";

    define("PI", 3.14);
    define("GREETING", "Hello, Neeraj!");

    echo 'Constant PI = ' . PI . b;
    echo 'Constant Greeting = ' . GREETING . b;

    const PI1 = 3.14;
    const GREETING1 = "Hello, world!";
    echo 'Constant PI1 = ' . PI1 . b;
    echo 'Constant Greeting1 = ' . GREETING1 . b;

























    ?>
</body>

</html>