<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

    // create two variables: num1, num2
    // create 4 functions: addNumbers, substractNumbers, multiplyNumbers, divideNumbers
    // return the 4 values


    $num1 = 5;
    $num2 = 4;

    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }
    function substractNumbers($num1, $num2){
        return $num1 - $num2;
    }
    function multiplyNumbers($num1, $num2){
        return $num1 * $num2;
    }
    function divideNumbers($num1, $num2){
        return $num1 / $num2;
    }

    echo "The sum of ". $num1 . " and " . $num2 . " is: " . addNumbers($num1, $num2) . "<br>";
    echo "The substraction of ". $num1 . " and " . $num2 . " is: " . substractNumbers($num1, $num2) . "<br>";
    echo "The multiplication of ". $num1 . " and " . $num2 . " is: " . multiplyNumbers($num1, $num2) . "<br>";
    echo "The division between ". $num1 . " and " . $num2 . " is: " . divideNumbers($num1, $num2) . "<br>";
    

?>
    
</body>
</html>