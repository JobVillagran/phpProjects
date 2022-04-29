<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // Create a variable str with a long piece of text
    // Create a function lowercaseCheck that converts
    // the string to a lowercase. Echo out all with lowercase
    

    $str = "Hey, I like PHP and all is going well!";
    
    function lowercaseCheck($str) {
        echo strtolower($str);
    }
    lowercaseCheck($str);    

    ?>

</body>

</html>