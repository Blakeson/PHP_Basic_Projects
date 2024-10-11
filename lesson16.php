<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
</body>
</html>
<?php
    /* Example 1
    function happy_birthday($first_name, $age) {
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "Happy Birthday to you! <br>";
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "You are {$age} years old <br><br>";
    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squidward", 45);
    */

    /* My Code - Proud
    function is_even($number) {
        if ($number % 2 == 0) {
            echo "It's even.";
        } else {
            echo "It's odd.";
        }
    } 

    is_even(10);
    */

    /* Example 2
    function is_even($number) {
        return $number % 2; 
    }

    echo is_even(10);
    */

    function hypotenuse(float $a, float $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4, 5);
?>