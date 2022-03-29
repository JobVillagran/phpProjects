<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // Create array onlyNumbers that has only integers
    // Use min and max function to get the highest lowest
    // value in a array

    $onlyNumbers = array(1, 2, 3, 50, 50, 20, 58, 76, 91);

    echo "The lowest value is " . min($onlyNumbers) . "<br>"; 
    echo "The highest value is " . max($onlyNumbers); 


    ?>

</body>

</html>