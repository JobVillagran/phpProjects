<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php

    //ARRAYS BUILT-IN

    /* Array  merge*/

    $personalInfo = array("Name"=> "Job", "Age"=>28, "Email"=> "jvillagran@easygosa.net");
    $moreInfo = array("Weight"=> "85", "Birthday"=>"9/9/89");

    $personalInfo = array_merge($personalInfo, $moreInfo); //param 1: The array we want to add the info. paran 2: The array we want inside the main array.

    foreach ($personalInfo as $key => $value){ //$key is equal to the name, age and gender. $value is equal to Dary, 30 and Male.
        echo $key . ": " . $value . "<br>";
    }

    /* Print only keys */

    print_r(array_keys($personalInfo));
    echo "<br>";

    /* Print only values */

    print_r(array_values($personalInfo));
    echo "<br>";
    echo "<br>";

    /* Add new value with PUSH */

    $cars = array("Toyota", "Mitsubishi", "Honda");
    array_push($cars, "Audi");      //param 1: array we want to add value. param 2: value we want inside the array.

    print_r($cars);
    echo "<br>";
    echo "<br>";

    /* Search inside of an array */

    $movil = array("Toyota", "Mitsubishi", "Honda");
    array_push($movil, "Audi");      

    echo array_search("Mitsubishi", $movil); //param 1: value we want to search. param 2: Array we want to search.
    echo "<br>";
    echo "<br>";

    /* Count item of items in array */

    $vehicule = array("Toyota", "Mitsubishi", "Honda");
    array_push($vehicule, "Audi");      //param 1: array we want to add value. param 2: value we want inside the array.

    echo count($vehicule); // It'll count all the elements in the array
    echo "<br>";
    echo "<br>";

    
    /* Sorting an Array Ascending */

    $numbers = array("Lays"=>1, "Coke"=>2, "Doritos"=>3, "Salsa"=>4);

    arsort($numbers);
    print_r($numbers);


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