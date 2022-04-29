<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <!-- <form action="site.php" method="post">
        <input type="text" name="student"><br>
        <input type="submit">

    </form> -->
    
    <?php

    //A function is a block of code written in a program
    //to perform some specific task

    //2 major functions:
    //BUILT-IN functions
    //USER-DEFINED functios

    //Why should we use functions?
    //1. Reuseability
    //2. Easy for error detection
    //3. Easily maintained

    //LOCAL & GLOBAL ESCOPE EXAMPLE

    $x = 10;
    
    function number($x){
        echo $x;
    }
    
    number($x);

    //OTHER EXAMPLES

    $num1 = 5;
    $num2 = 5;
    
    //Parameters inside the ()
    function myFunction($num1, $num2) {
        echo $num1 * $num2;
    }

    //Arguments inside the ()
    myFunction($num1, $num2);

    //OTHER EXAMPLE
    
    function sayHi($name, $age){
        echo "Hello $name, you are $age <br>";
    }
    sayHi("Tom", 40);
    sayHi("Maria", 35);
    sayHi("Larry", 90);

    //Functions with return value
    //under the return value, we CANNOT print an echo
    //if not, our echo value at the ed of the function
    //is going to be printed after the first one.
    //that's why we use RETURN first.
    $num1 = 10;
    $num2 = 15;
    
    function add($num1, $num2) {
        $result = $num1 + $num2;
        return $result;
    }

    echo "The number is: " . add($num1, $num2) . "<br>";

    //Pass by reference
    $x = 10;
    
    function addByValue($x) {
        $x += 5;
    }

    function addByReference(&$x) { //When we pass by reference we add an & before the expresion
        $x += 10;
    }

    addByValue($x);
    echo "The value is: " . $x . "<br>";

    addByReference($x);
    echo "The value is: " . $x . "<br>"; //The difference is that it takes the initial value of $x plus the value we add inside the function


    ?>

</body>

</html>