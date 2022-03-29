<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    //SUPERGLOBALS

    // GLOBALS
    // $_POST
    // $_GET
    // $_SERVER
    // $_COOKIE
    // $_SESSION
    // $FILES

    $x = 100;
    $y = 200;

    function add(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; // GLOBALS 1: Create new variable. GLOBALS 2 and 3: Current variables that we have.
    }
    add();      // We call our function and then
    echo $z;    // We print the new GLOBALS variable


    ?>

</body>

</html>