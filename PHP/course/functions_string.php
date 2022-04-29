<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php

    //TYPE OF FUNCTIONS:
    // String functions
    // Math functions
    // Date functions
    // Array functions
    // Random number functions
    // More functions: https://www.php.net/manual/en/functions.internal.php#:~:text=Internal%20(built%2Din)%20functions%20%C2%B6&text=Or%2C%20to%20use%20mysqli_connect(),extensions%20are%20loaded%20into%20PHP.


    //STRING FUNCTIONS
    
    /*String length */

    $str = "Hola mundo!";
    echo strlen($str) . "<br>";         // Count lenght of the string, including spaces

    /* String word Count */

    $firstName = "My name is Job ";
    echo str_word_count($firstName) . "<br>"; //Counts the amount of words. Do not count spaces.

    /*String strpox*/
    // With this, you can find an text within a string

    $email = "jvillagran@easygo.net";
    echo "<br>";
    if (strpos ($email, "@easygosa.net")){ //You can use an input or in this case; a whole statement
        echo "The email " . $email . "is valid";
    } else {
        echo "The email " . $email . " is not valid!";
    
    }
    $email2 = "jobvillagran@gmail.com";
    echo "<br>";
    if (strpos ($email2, "@gmail.com")){ //You can use an input or in this case; a whole statement
        echo "The email " . $email2 . "is valid";
    } else {
        echo "The email " . $email2 .  "is not valid!";
    }

    /* Ucwords */
    //Every first letter of every word is uppercase
    echo "<br>";
    echo ucwords("Hola, me llamo job");     // Every first letter of every word is uppercase
    
    /* strtoupper */
    echo "<br>";
    echo strtoupper("Hola, me llamo job");     // Every word is uppercase
    
    /* strtolower */
    echo "<br>";
    echo strtolower("Hola, me llamo job");     // Every word is lowercase

    
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