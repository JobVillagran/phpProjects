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

    // create a function: evenOrOdd
    // to get 1 number: num1
    // and is going to check if it is even or odd

    $num1 = 2;

    function evenOrOdd($num1){
        if ($num1 % 2 == 0){
            echo $num1 . " is even";
        } else {
            echo $num1 . " is NOT even";
        }
    }
    evenOrOdd($num1);

?>
    
</body>
</html>