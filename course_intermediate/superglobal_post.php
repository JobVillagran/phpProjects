<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

     <form action="superglobal_post.php" method="post"> <!--Change the action path to the one you are working on -->
        Name: <input type="text" name="name">
        Age: <input type="text" name="age"> <br><br>
        <button type="submit">Submit</button>
    </form>

    <?php

    //SUPERGLOBALS:

    // GLOBALS
    // $_POST       // Collect data from the HTML form [Invisible]
    // $_GET
    // $_SERVER
    // $_COOKIE
    // $_SESSION
    // $FILES

    if (isset($_POST)){     // isset = checks if a variable is set or not
        echo "<br>";
        echo $_POST['name'] . ", your form was submitted";
    }


    ?>

</body>

</html>