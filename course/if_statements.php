<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php

    //Logical operators
    //And --- Both X and Y are true
    //&&  --- Both X and Y are true
    //OR  --- Either X or Y are true
    //||  --- Either X or Y are true
    //Xor --- Either X or Y are true, not both
    //!   --- True if X is not true
    //1   --- True
    //0   --- False
    
    //if condition with &&(AND) operator
    // both condition should be true
    $isMale = true;
    $isTall = true;
    if ($isMale && $isTall) {
        echo "You are a tall male <br>";
    } else {
        echo "You are not a tall male <br>";
    }

    //same code but using the || (OR) operator
    //with OR, only one condition needs to be true
    //to make it true.
    $isMale = true;
    $isTall = false;
    if ($isMale || $isTall) {
        echo "You are a tall male <br>";
    } else {
        echo "You are not a tall male <br>";
    }


    //same code but combining &&(AND), ||(OR), !(negation)
    //the negation is combined with elseif
    $isMale = false;
    $isTall = true;
    if ($isMale && $isTall) {
        echo "You are a tall male <br>";
    } elseif ($isMale && !$isTall) {
        echo "You are a short male <br>";
    } elseif (!$isMale && $isTall) {
        echo "You are not male but you are tall <br>";
    } else {
        echo "You are not male and not tall<br>";
    }
    

    //OTHER EXAMPLE

    $age = 20;

    if ($age < 20){
        echo "Sorry you're too young!";
    } elseif ($age > 50) {
        echo "You are too old to party!";
    } elseif ($age < 10) {
        echo "You need to be in bed!";
    } elseif ($age > 18 && $age < 21) {
        echo "You are not allow to drink!";
    } else {
        echo "You are old enough";
    }


    ?>

</body>

</html>