<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php

   //Constants: is a Fix value. Two Types:
   //1. Function - defined()
   //2. Keyword - CONST
   // The difference between those two types is that
   // define = Defines runtime
   // Cons = Defines compiler time, value cannot change when it's defined, 

   //1. defined(ARGUMENT1, ARGUMENT2)
   // Constants are always in UPPERCASE
   //Name has the same rules as variables
    
   define("COMPANY_NAME", "Apple");
   
    echo COMPANY_NAME;

    echo "<br>";

    //2. Keyword - CONST
    const MY_NAME = "Emanuel";
    echo MY_NAME;

    
    ?>

</body>

</html>