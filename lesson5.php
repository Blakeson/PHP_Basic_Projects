<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lesson5.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x);        // Absolute value function
    // $total = round($x);      // Rounds a number
    //$total = floor($x);       // Rounds down a number
    //$total = ceil($x);        // Rounds up a number
    //$total = sqrt($x);        // Square root of a number
    //$total = pow($x, $y);     // Raise to a power
    //$total = max($x, $y, $z); // Shows greatest number of all inputted values
    //$total = min($x, $y, $z); // Shows smallest number of all inputted values
    //$total = pi();            // Shows the value of pi
    //$total = rand(1, 100);      // Generates a random number from within a range of two numbers

    echo $total;
?>