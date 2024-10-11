<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>
    <form action="lesson9.php" method="post">
        <label for="">Enter a number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php 

    /* Example 1
    for($i = 0;$i <= 10;$i++) {
        echo $i . "<br>";
    }
    */

    $counter = $_POST["counter"];

    for($i = 1;$i <= $counter; $i++) {
        echo $i . "<br>";
    }
?>