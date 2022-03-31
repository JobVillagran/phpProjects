<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <!-- <form action="site.php" method="session">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age"> <br><br>
        Password: <input type="password" name="password"> <br><br>
        <button type="submit">Submit</button>
    </form> -->

    <?php

    //SUPERGLOBALS:

    // GLOBALS
    // $_POST
    // $_GET
    // $_SERVER
    // $_COOKIE
    // $_SESSION    // Great for collect data that is sensitive info. Session will be destroyed if the website is closed.
    // $FILES

    // session_start();

    // //storing information

    // $_SESSION ["Name"] = "job";
    // $_SESSION ["Age"] = 32;

    // echo "Hello " . $_SESSION["Name"] . "<br>";

    // echo "test"

    $targetDays = mktime(0, 0, 0, 11, 11, 2022); // param1: Hours, param2: minutes, param3: seconds param4,5,6: Day, Month, Current year; Number 4,5,6 are the param that we want to add

    $today = time(); //Create a variable with the current time

    $differenceDays = ($targetDays - $today); //Creating a new variable with the operation.

    $days = (int)($differenceDays / 86400);
    echo "Faltan " . $days . " días para el cumpleaños de Jhoany " . "<br>";
    
    ?>

</body>

</html>