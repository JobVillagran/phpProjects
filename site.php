<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>

<<<<<<< HEAD
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
=======
    <div>
        <h1>Get in touch</h1>
        <p>Please fill in the fields</p>
    </div>

    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Enter message"></textarea>
        <button type="submit" name="submit">Send Email</button>
    </form>

    <?php

>>>>>>> 68a3f5d225991ed0086026255283dc9229bf9cc2
    
    ?>

</body>

</html>