<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>

<body>


    <?php

        // Using variables to filter

        $email_a = "jobvillagran@gmail.com";
        $email_b = "jobmail";

        if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
            echo "This email is valid";
        } else {
            echo "This email is NOT valid";
        }

        echo "<br>";

        // Using a function to filter the same variables

       
        
        function emailFilter($email){
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $result = true;
            } else {
                $result = false;
            }
            return $result;
        }

        $isValid = emailFilter($email_a);

        if ($isValid){
            echo "Valid Email";
        } else {
            echo "Invalid email";
        }

        echo "<br>";

        $$isValid = emailFilter($email_b);

        if ($isValid){
            echo "Valid Email";
        } else {
            echo "Invalid email";
        }

    
    ?>

</body>

</html>