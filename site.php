<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>

    <!-- <div>
        <h1>Get in touch</h1>
        <p>Please fill in the fields</p>
    </div>

    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Enter message"></textarea>
        <button type="submit" name="submit">Send Email</button>
    </form> -->

    <?php
    require_once 'database.php';

    $sql = "SELECT * FROM users";               // We build our query
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