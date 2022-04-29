<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    
    
    <?php
    
    $friends = array("kevin", "larry", "maria", "oscar");
    $friends [4] = "tom"; //adding a new element into the array
    $friends[0] = "mark"; //updating an index
    echo $friends[4]; //using index to locate a variable

    echo count($friends); //counting elements in the array
    
    ?>

</body>

</html>