<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php
    
    //Logical operators
    //And --- Both X and Y are true
    //&&  --- Both X and Y are true
    //OR  --- Either X or Y are true
    //||  --- Either X or Y are true
    //Xor --- Either X or Y are true, not both
    //!   --- True if X is not true
    //1   --- True
    //0   --- False



    //Iterate Over array variables
    //Only works with arrays and objects
    //foreach (array_Expresion as $key)

    $names = array("Maria", "Larry", "Peter");

    foreach ($names as $names){
        echo "My name is " . $names . "<br>";
    }

    $person = array("Name" => "Dary", "Age" => 30,  "Gender" => "Male");

    foreach ($person as $key => $value){ //$key is equal to the name, age and gender. $value is equal to Dary, 30 and Male.
        echo $key . ": " . $value . "<br>";
    }



    ?>

</body>

</html>