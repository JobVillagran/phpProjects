<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // Create an array NUMBERS
    // Use a function to sort the array DESCENDING

    $numbers = array("Lays"=>1, "Coke"=>2, "Doritos"=>3, "Salsa"=>4);

    arsort($numbers);
    print_r($numbers);


    ?>

</body>

</html>