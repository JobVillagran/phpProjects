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

    // create variable" year
    // create function isLeapYear
    // check if the year that is entered in the variable is leap or Not
    // you can know if a year is leap by dividin the year in 400 OR dividing the year in 4

    $year = 2001;

    function isLeapYear($year) {
        if ($year % 400 == 0 || $year % 4 == 0) { //this operation checks the leap year
            return true;
        } else {
            return false;
        }
    }
    if (isLeapYear($year)){
        echo $year . " is a leap year";
    } else {
        echo $year . " is Not a leap year";
    }
?>
    
</body>
</html>