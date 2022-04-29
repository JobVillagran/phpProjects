<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <?php

    //SUPERGLOBALS:

    // GLOBALS
    // $_POST
    // $_GET
    // $_SERVER
    // $_COOKIE     // Small file that the webserver stores in the client computer
    // $_SESSION
    // $FILES

    // ARGUMENTS COOKIES
    // Name - You set the name of the cookie
    // Value - You set the value of the cookie
    // Expire - [WORKS IN SECONDS AND WE USE THE DATE FUNCTION] You set the expiration time of the cookie
    // Path - You set the path on the server where the cookie is going to be available
    // Domain - Were you specified where your cookie is going to be available
    // Security - [MANDATORY] Indicates the cookie needs to be sent in an HTTPS secure connection

    // If you do not include an experation date, the cookie
    // will only be stored for the current session.

    $time = time() + 86400 * 30; //We use time fuction follow by the time we set in seconds. Using a + means is going to last more, using a - means is going not going to last two refresh
    setcookie("name", "Job", $time);

    print_r($_COOKIE);

    echo "<br>";

    echo $_COOKIE['name'];


    ?>

</body>

</html>