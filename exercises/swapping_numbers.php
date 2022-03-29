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
    // create 1 function: swapNumbers
    // the function should swap the numbers

    $num1 = 50;
    $num2 = 30;

    function swapNumbers($num1, $num2){
        $temporal = $num1;  //we are storing temporary number 1 here
        $num1 = $num2;      // then we stored number 1 in number 2
        $num2 = $temporal;  // finally we store number 2 in temporal

        echo "After swapping number 1 = " . $num1 . " number 2= " . $num2;
    }
    swapNumbers($num1, $num2);

    //We can store this numbers like that because on PHP can overwrite the value of a variable
    

?>
    
</body>
</html>