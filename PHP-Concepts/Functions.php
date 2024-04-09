<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>

<body>
    <h1>Functions in PHP</h1>

    <?php
    const b = "<br/>";
    const h = "<h1>";
    const hh = "</h1>";



    echo h . "Functions" . hh;

    // echo "<h2>" . "continue and break" . "</h2>";
    function helloworld()
    {
        echo "Its inside function... Hello Hari" . b;
    }

    function helloworld_withName($name)
    {
        echo "Its inside function with args... Hello $name" . b;
    }

    helloworld();
    helloworld_withName("Neeraj");


    function addition($one, $two)
    {
        return $one + $two;
    }

    echo "Returing Addition of 20 + 30  = " . addition(20, 30) . b;

    function basic_maths($one, $two)
    {
        $maths = array($one + $two, $two - $one);
        return $maths;
    }
    $result = basic_maths(20, 30);
    echo "Returing Addition using array of 20 + 30  = " . $result[0] . b;
    echo "Returing Substraction using array of 30 - 20  = " . $result[1] . b;


    $bar = "Outside";
    function check()
    {
        $bar = "Inside";
    }
    echo "bar value before check() function call = $bar " . b;

    check();
    echo "bar value after check() function call = $bar " . b;
    function check1()
    {
        global $bar;
        $bar = "Inside";
    }
    echo "bar value before check1() function call = $bar " . b;

    check1();
    echo "bar value after check1() function call using global = $bar " . b;


    function day($name = "Sunday")
    {
        echo "Its $name" . b;
    }
    echo "Calling day() function with args... " . day("Monday") . b;
    echo "Calling day() function without args... " . day() . b;










    ?>
</body>

</html>