<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php

    // DATE

    // 'd' = Day
    // 'j' = Day without zeros
    // 'D' = Day of week (3 letters)
    // 'l' = Full day of the week
    // 'm' = Month as a number with zeros
    // 'n' = Month as a number without zeros
    // 'M' = Month (3 letters)
    // 'F' = Full month
    // 'y' = Two-digit year
    // 'Y' = Full year

    //DATE AND TIME

    /* Date */

    echo date('F') . "<br>";

    echo date('Y/m/d') . "<br>";

    echo date('d/M/Y') . "<br>";

    /* Time */

    // 'g' = Hours in 12-hour format without zeros
    // 'h' = Hours in 12 hour format with zeros
    // 'G' = hours in 24-hour format without zeros
    // 'H' = Hours in 24-hour format with zeros
    // 'a' = am/pm in lowercase
    // 'A' = am/pm in uppercase
    // 'i' = minutes without leading zeros
    // 's' = seconds without leading zeros

    echo date('H:i:s a') . "<br>";
    //Set timezone
    date_default_timezone_set('Europe/Amsterdam') . "<br>";

    $time = strtotime("4:00pm December 03 2019") . "<br>";
    //String to time
    echo $time;

    // Is the timestamp is the value represented
    // as seconds calculated, since UNIX Epoch,
    // January 1, 1970, and also called as UNIX
    // timestamp.

    $timeTwo = strtotime("4:00pm December 03 2019");
    echo date('m/d/Y H:i:s a', $timeTwo);
    echo "<br>";

    // COUNTDOWN DAY SCRIPT

    // Create a birthday countdown script
    // that counts the days between the current day and your Bday

    $targetDays = mktime(0, 0, 0, 9, 9, 2022); // param1: Hours, param2: minutes, param3: seconds param4,5,6: Day, Month, Current year; Number 4,5,6 are the param that we want to add

    $today = time(); //Create a variable with the current time

    $differenceDays = ($targetDays - $today); //Creating a new variable with the operation.

    $days = (int)($differenceDays / 86400); // ADD (int) so our compiler can converted to an integer value
    echo "Days until next birthday: " . $days . " days!" . "<br>";



    ?>

</body>

</html>