<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // check which value is higher
    //echo max(3, 6);

    // getting the higher value w/ 2 variables
    function getMaxValue($num1, $num2)
    {
        if ($num1 > $num2) {
            return $num1;
        } else {
            return $num2;
        }
    }
    echo getMaxValue(300,90);
    
    // getting the higher value w/ 3 variables
    function getMaxV($num1, $num2, $num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3){
            return $num2;
        } else {
            return $num3;
        }
    }
    echo getMaxV(80,90,50);

    ?>

</body>

</html>