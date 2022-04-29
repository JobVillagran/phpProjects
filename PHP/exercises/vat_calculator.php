<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 


//create 2 variables: price and vat
// create a function that takes the 2 parameters
// return calculatedPrice
// Print out price, vat and total price

    $price = 5;
    $vat = 4;

    function calculateVat($price, $vat){
        $calculatedPrice = ($price * $vat) + $price;
        return $calculatedPrice;
    }

    echo "The price is " . $price . "<br>";
    echo "The vat is " . $vat . "<br>";
    echo "The total price is " . calculateVat($price, $vat);



?>
    
</body>
</html>