<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // Create a birthday countdown script
    // that counts the days between the current day and your Bday
    
    $targetDays = mktime(0, 0, 0, 11, 11, 2022); // param1: Hours, param2: minutes, param3: seconds param4,5,6: Day, Month, Current year; Number 4,5,6 are the param that we want to add

    $today = time(); //Create a variable with the current time

    $differenceDays = ($targetDays - $today); //Creating a new variable with the operation.

    $days = (int)($differenceDays / 86400);
    echo "Faltan " . $days . " para el cumpleaños de Jhoany " . "<br>";


    ?>

</body>

</html>