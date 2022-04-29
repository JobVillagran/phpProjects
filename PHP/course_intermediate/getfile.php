<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    $filePath = "uploads/file.txt";

    $output = file_get_contents($filePath);     //param1: files path

    $ages = explode("\n", $output);

    $totalAge = 0;          // This variable is going to calculate average age
    $i = 0;                 // Also this one is going to help to calculate the average age using the foreach below.

    foreach ($ages as $age) {
        echo $age . "<br>";
        $totalAge = $totalAge + $age;
        $i++;
    }

    echo "The average age is " . ($totalAge / $i);

    ?>

</body>

</html>