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

    echo $output . "<br>";

    ?>

</body>

</html>