<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <!-- tag: enctype="multipart/form-data"
    Specifices how the form data should be encoded -->

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Submit</button>
    </form>


    <?php

    //SUPERGLOBALS:

    // GLOBALS
    // $_POST
    // $_GET
    // $_SERVER
    // $_COOKIE
    // $_SESSION
    // $FILES       // THIS FILE IS CONNECTED WITH THE upload.php file.
                    // The PHP below is NOT necessary, so that's why is commented.

    /*


    // How to upload files:
    // 1. Upload it to the root
    // 2. Directly to the database

    echo $name = $_FILES['file']['name'] . "<br>";  //param 1: type on the form. param 2: it's the NAME OF THE TAG on the form:  <input type="file" name="file">
    echo $name = $_FILES['file']['type'] . "<br>";

    // check the location of the file
    echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";

    // Print an error if the file is not able to load
    echo $error = $_FILES['file']['error'] . "<br>";

    */

    ?>

</body>

</html>