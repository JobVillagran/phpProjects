<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="site.php" method="post">
        What was your age? <br><br>
        <input type="text" name="grade"><br><br>
        <input type="submit"><br><br>
    </form>

    <?php
    
    $grade = $_POST["grade"];
    switch ($grade){
        case "A":
            echo "Amazing job!";
            break;
        case "B":
            echo "Good job!";
            break;
        case "C":
            echo "You're getting there!";
            break;
        case "D":
            echo "You can do it better :)";
            break;
        default:
        echo "Invalid grade";
    }

    ?>

</body>

</html>