<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    

    <form acction="site.php" method="post">
        <input type="text" name="age">
        <button type="submit" name="submit">button</button>
    </form>

    <?php

    // This is also linked with the folder UPLOADS
    // Here you can make the user type input and 
    // store it in the file called file.txt.
    // Also if the file or type of document is not created
    // The fopen function can create the file

    // List of possible modes with fopen
    // https://www.php.net/manual/en/function.fopen.php

    if (isset($_POST['age'])) {
        $myFile = fopen("uploads/file.txt", "a");       // fopen is going to search for a file named file.txt and if that doesn't exist on the folder, is going to create it.
        $text = "My age is " . $_POST["age"] . "\n";

        fwrite($myFile, $text);                         // fwrite write inside the file we want. param1: the file we want to add the text. param2: it could be the text or a variable.
        
        fclose($myFile);                                // close the add of the file
    }

    ?>

</body>

</html>