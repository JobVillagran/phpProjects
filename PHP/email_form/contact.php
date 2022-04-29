<?php

if (isset($_POST['submit'])){
    $name = trim($_POST['name']);   // trim remove white spaces from left to right side of the string
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    
    // 1. Email you are sending it to
    // 2. Subject
    // 3. Is the message

    $myMail = "jobvillagran@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from " . $name . ". \n\n" . $message;

    mail($myMail, $subject, $message2, $header);
    header("Location: site.php?mailsend");               // With this function header, we are going to direct the user once they click the submit button
                                                         // Also the ?mailsend is a message we are going to print but only on the URL
}


?>