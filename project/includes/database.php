<?php

// This file goes inside the folder project > includes

// params to connect to a database

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "dbtestdbeaver";

// Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($conn) {

} else {
    die("Database connection failed!");
}

?>