<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <?php
    // Don't know the number of interations
    //while loop / we excetute the condition first then the body
    $index = 1;
    while($index <=5){
        echo "$index <br>";
        $index++;
    }

    //do while loop / we excetute the body and then the condition.
    $index = 1;
    do{
        echo "$index <br>";
        $index++;
    }while($index <=5)

    //OTHER EXAMPLES
    
    $y = 1;
    while($y <= 10){
        echo $y ."<br>";
        $y++;
    }


    //do while loop
    $cookie = 1;
    do{
        echo "I love cookies! <br>";
        $cookie++;
    }while($cookie < 1)

    ?>

</body>

</html>