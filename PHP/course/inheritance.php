<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    
    class Chef {
        function makeChicken(){
            echo "The chef makes chicken <br>";
        }
        function makeSalad(){
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes BBQ ribs <br>";
        }
    }
    class ItalianChef extends Chef {
        function makePasta(){
            echo "The chef makes pasta <br>";
        }
        function makeSpecialDish(){ //This is called Overriding a Function
            echo "The chef makes chicken parm <br>";
        }
    }


    $chef = new Chef();
    $chef->makeSpecialDish();
    $italianChef = new ItalianChef();
    $italianChef->makePasta();
    $italianChef = new ItalianChef(); //Is connected with the Overriding of a function.
    $italianChef->makeSpecialDish();

    ?>


</body>

</html>