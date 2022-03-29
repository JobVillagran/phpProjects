<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php
    
    //Initialization
    // Evaluated once at beginning
    $index = 1;
    while($index <=5){ //inside the parentesis we have the condition
        echo "$index <br>";
        $index++;
    }

    for ($i = 1; $i <=8; $i++){ // declaramos la variable; luego creamos la condicional; creamos el aumento de la variable
        echo "$i <br>";
    }

    // Looping an array
    $luckyNumbers = array(1,2,3,4,5,6);
    for ($i = 0; $i < count($luckyNumbers); $i++){ // declaramos la variable; luego creamos la condicional; creamos el aumento de la variable
        echo "$luckyNumbers[$i] <br>";
    }

    // OTHER EXAMPLE

    $deposit = 1000;
    $interest = 0.05;

    for ($years = 1; $years <= 5; $years++){
        $deposit += ($deposit * $interest);
        echo "The total amount after ". $years . " year is: " . $deposit . "<br>";
    }


    ?>

</body>

</html>