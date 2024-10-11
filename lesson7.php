<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
    // && = True if both conditions are true
    // || = True if at least one condition is true
    // "! = True if false. False if true

    /* Example 1
    $temp = 15;
    $cloudy = false;

    if($temp < 0 || $temp > 30) {
        echo "The weather is bad.<br>";
    } else {
        echo "The weather is good.<br>";
    }

    if(!$cloudy) {
        echo "It's sunny.";
    } else {
        echo "It's cloudy.";
    }
    */

    /* Example 2
    $age = 25;
    $citizen = true;

    if($age >= 18 && $citizen) {
        echo "You can vote";
    } else {
        echo "You can't vote";
    }
    */

    $child = true;
    $senior = false;
    $ticket = null;

    if($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";

?>