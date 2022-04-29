<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php

    //TYPE OF FUNCTIONS:
    // String functions
    // Math functions
    // Date functions
    // Array functions
    // Random number functions
    // More functions: https://www.php.net/manual/en/functions.internal.php#:~:text=Internal%20(built%2Din)%20functions%20%C2%B6&text=Or%2C%20to%20use%20mysqli_connect(),extensions%20are%20loaded%20into%20PHP.

    // MATH FUNCTIONS:

    //**Ceil: Get the next value to an interger.

    echo ceil(1.50); //The outcome of this is 2
    echo ceil(0.50); //The outcome of this is 1
    echo ceil(2.50); //The outcome of this is 3

    //**Floor: Gets the lower value of an integer

    echo ceil(1.50); //The outcome of this is 1
    echo ceil(0.50); //The outcome of this is 0
    echo ceil(2.50) . "<br>"; //The outcome of this is 2

    //**Round: 

    echo round(0.595871, 1) . "<br>"; //First parameter: Our number, Second parameter: The amount of integers we want.
    // outcome of previous one: 0.6

    //Exponentiation

    echo exp(2);

    ?>

</body>

</html>