<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate Arrays</title>
</head>
<body>
    <form action="lesson12.php" method="post">
        <label for="">Enter a Country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>
<?php 
    // Associate Array = An array made of key => value pairs

    
    $capitals = array("USA"=>"Washington D.C.", 
                    "Japan"=>"Kyoto", 
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");

    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);
    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    /* Example 1
    echo count($capitals);

    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
    */

    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";

?>