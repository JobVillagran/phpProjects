<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // Create a variable with a long piece of text
    // Create a function searchText that has 2 parameters
    // 1. str 2. punctuation
    // find the amount of punctuations inside the string
    // This method Has no return value

    $str = "This is a great day. Learning a lot with Youtube.
    PHP is cool and I'm doing different exercises with it, also
    I'm learning ........syntax for other different lenguajes!";

    $punctuation = 0;

    function searchText($str, $punctuation){
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == ".") {
                $punctuation++;
            }
        }
        echo "The text has " . $punctuation . " punctuation";
    }

    searchText($str, $punctuation);

    ?>

</body>

</html>