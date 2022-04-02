<?php
    if (isset($_POST['submit'])) {
        //Add database connection
        require 'datatables.php';

        $username = $_POST['username'];     //bringing the info from the register.php
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPassword'];

        //ERROR HANDLERS

        if(empty($username) || empty($password) || empty($confirmPass)) {
            header("Location: ../register.php?error=emptyfields&username="
            . $username);           // With this addition of emptyfiends&username, the user doesn't have to re enter the fields again.
        }
    }
?>