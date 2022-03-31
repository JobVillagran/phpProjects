<?php

    //This file is connected with 1 more file called superglobal_files.php
    // It's a function that can help you to upload files using a form.
    // Also the folder called uploads is where all the images are going to be store.
    // DO NOT DELETE THE FOLDER CALLED uploads.

if (isset($_POST ['submit'])){
    $file = $_FILES['file'];
    $name = $_FILES ['file']['name'];           // Find file name
    $tmp_name = $_FILES ['file']['tmp_name'];   // Tem loc
    $size = $_FILES ['file']['size'];           // Find file size
    $error = $_FILES ['file']['error'];         // Find errors
    
    // Explode from puctuation mark. Example: test.jpg - Here we want to explode/separate the name when the function finds the dot.
    $tempExtension = explode ('.',$name); // param1: where we want to explode/separate the name. param2: the extension we created on the top

    $fileExtension = strtolower(end($tempExtension)); // PHP is caps sensitive, so that's why we need to converted into lowercase.

    // Allowed extensions
    $isAllow = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtension,$isAllow)) {        // param1: the variable we want to read. param2: the parameter we wan to compare against. 
        if ($error === 0) {                         // if 0 = no error then 1 is equal to error
            if ($size < 30000){                     // We check if the file sizes is allow, PHP works with kb
                $newFileName = uniqid('', true) . "." . $fileExtension;    // Here, with uniqid we make sure there are NOT files with the same name, cuz if not, is going replace the files with the same name. Example test.png and other user upload another file named test.png, the second one is going to replace the first one.
                                                    // continue of uniqid: param1: prifix or optional. param2: entrify and the conca
                $fileExtension;
                $fileDestination = "uploads/" . $newFileName;    // We create a new variable and here we are going to locate our file.
                move_uploaded_file($tmp_name, $fileDestination); // param1: temporary location build on top. para2: where we want to send our file destination.
                header("Location: site.php?uploadedsuccess");    // Here we pick the location, which in this case was site.php
            } else {
                echo "Sorry, the file size is too big. Max size 29 MB";
            }
        } else {
            echo "Sorry, there was an error. Try it again later.";
        }
    } else {
        echo "Your file type is not accepted.";
    }
}




?>