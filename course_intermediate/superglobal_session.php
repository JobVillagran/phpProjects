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

    session_start();

    //storing information

    $_SESSION ["Name"] = "job"; // We passed the value inside brakets
    $_SESSION ["Age"] = 32;

    echo "Hello " . $_SESSION["Name"] . "<br>";

    session_destroy();

    ?>

</body>

</html>