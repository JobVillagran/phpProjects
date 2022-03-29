<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="site.php" method="post">
        First Num: <input type="number" step="0.001" name="num1"><br>
        OP: <input type="text" name="op"><br>
        Second Num: <input type="number" name="num2"><br>
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"]; //operator, String of text

    if($op == "+"){
        echo $num1 + $num2;
    } else if($op == "-"){
        echo $num1 - $num2;
    } else if($op == "/"){
        echo $num1 / $num2;
    } else if($op == "*"){
        echo $num1 * $num2;
    } else {
        echo "invalid operator";
    }

    

    ?>

</body>

</html>