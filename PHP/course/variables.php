<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<h1>Hello world<h1>";
    echo "<hr />";
    echo "<p>Servidor funcionando<p>";
    echo "<hr />";

    /*echo "<h3>Variables</h3>";

    $characterName = "Tom";
    $characterAge = 35;
    
    echo "There was a man named $characterName <br>";
    echo "he was $characterAge years old <br>";
    $characterName = "Larry";
    echo "he really liked the name $characterName <br>";
    echo "but he didn't liked being $characterAge years old";

    echo "<h3>Data Types</h3>";

    //String:
    $phrase = "Ser o no ser";
    
    //Integer:
    $age = 30;

    //Boolean:
    $isMale = true;

    //No value: null

    echo "<h3>Working with Strings</h3>";
    echo "$phrase <br>";
    echo strtolower($phrase); // lowercase TEXT
    echo "<br />";
    echo strtoupper($phrase); //uppercase TEXT
    echo "<br />";
    echo strlen($phrase); //length of string
    echo "<br />"; echo "<br />";

    STRING FUNCTIONS

    $list = "Alex, John, Harry, Marta";
    echo $list; echo "<br />";
    echo $list[0]; //print the letter inside that variable
    echo "<br />";
    $list[0] = "F";
    echo $list; //with the previous list, we turned into a F
    echo "<br />"; echo "<br />";*/

    //Changing values of an string

    $example = "Tigo Guatemala";
    echo $example;
    echo "<br />"; echo "<br />";
    echo str_replace("Tigo","Claro", $example); //reemplazando un valor con otro
    echo "<br />"; echo "<br />";
    //OPERATORS

    echo 10% 3;
    echo "<br />"; 
    echo pow(2, 10); //elevado a X

    ?>

</body>
</html>