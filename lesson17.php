<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    
</body>
</html>
<?php 
    $username = array("John", "Jack", "Smith");
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "0");
    // $phone = str_replace("-", "/", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "John Smith");
    // $count = strlen($phone);
    // $index = strpos($phone, "-");
    // $firstname = substr($username, 0, 4);
    // $lastname = substr($username, 4);
    // $fullname = explode(" ", $username);
    $username = implode("-", $username);


    echo $username;
?>