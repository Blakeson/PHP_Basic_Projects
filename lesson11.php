<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>
<?php 
    $foods = array("Apple", "Orange", "Banana", "Coconut");

    // $foods[0] = "Pineapple";
    // array_push($foods, "Pineapple", "Kiwi");
    // array_pop($foods);
    // array_shift($foods);
    // $reversed_foods = array_reverse($foods);
    echo count($foods);

    echo $foods[0] . "<br>";
    echo $foods[1] . "<br>";
    echo $foods[2] . "<br>";
    echo $foods[3] . "<br>";

    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>