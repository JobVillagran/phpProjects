<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form action="superglobal_get.php" method="get"> <!--Change the action path to the one you are working on -->
        Name: <input type="text" name="name">
        Age: <input type="text" name="age"> <br><br>
        Password: <input type="password" name="password"> <br><br>
        <button type="submit">Submit</button>
    </form>

    <?php

    //SUPERGLOBALS:

    // GLOBALS
    // $_POST
    // $_GET        // Collect data from the HTML form [Data will be visible]
    // $_SERVER
    // $_COOKIE
    // $_SESSION
    // $FILES

    // We didn't have to use any PHP to check the result for
    // the form.


    ?>

</body>

</html>