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

    // create a function: isPrime
    // to get 1 number: num1
    // and is going to check if is prime or not and it'll return true or false

    $num1 = 2;

    function isPrime($num1){
        if ($num1 == 1){
            return false;
        } else {
            for ($i = 2; $i < $num1 / 2; $i++){
                if ($num1 % $i == 0){
                    return false;
                }
            }
            return 1;
        }
    }
    if (isPrime($num1)){
        echo "The number is prime";
    } else {
        echo "The number is Not prime";
    }

?>
    
</body>
</html>