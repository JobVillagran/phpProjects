<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>


    <?php
    require_once 'database.php';
    require_once '';

    $sql = "SELECT * FROM users WHERE id = 1";               // We build our query
    $result = mysqli_query($conn, $sql);        // This fuction can tell us if the reqry $sql can be performed. param1: variable on the database.php file. param2: the variable that we want to use.
    $rowCount = mysqli_num_rows($result);       // we created this variable to make sure we are getting something printed out.

    if ($rowCount > 0){
        while ($row = mysqli_fetch_assoc($result))     // this function returns an associative array that correspondse to the fetch row until the are NO more rows left
        echo $row['username']. "<br>";          // This is the value/row that we want to print from the database.
    } else {
        echo "No results found.";
    }
    
    ?>

</body>

</html>