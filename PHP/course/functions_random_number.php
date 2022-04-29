<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // Random number


    // rand(); Creates a random number every time you  refresh.
    echo rand();

    echo "<br>";

    //getrandmax(); Create random number BUT DON'T change once generated.
    echo getrandmax();

    echo "<br>";

    echo rand(8,10); //param1: minimum number. param2: maximum number.
    echo "<br>";
    // Usng variables

    $min = 1;
    $max = 2;

    echo rand($min,$max);

    // Create random number fuction randNumber
    // that generates only float random numbers
    
    $randNumber = rand(0, 10) / 10; //We divide the Interger on 10

    echo $randNumber;
    

    // Create array onlyNumbers that has only integers
    // Use min and max function to get the highest lowest
    // value in a array

    $onlyNumbers = array(1, 2, 3, 50, 50, 20, 58, 76, 91);

    echo "The lowest value is " . min($onlyNumbers) . "<br>"; 
    echo "The highest value is " . max($onlyNumbers); 


    ?>

</body>

</html>