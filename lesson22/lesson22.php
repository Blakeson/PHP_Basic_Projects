<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_SERVER</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> 
        Username: <br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php
    // PHP_SELF is vulnerable to XSS. Enclose in something like htmlspecialchars to avoid this.

    // $_SERVER = Contains headers, paths, and script locations. The entries in this array are created by the web server.

    /* Example 1
    foreach($_SERVER as $key => $value) {
        echo"{$key} = {$value} <br>";
    }
    */

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Hello";
    }

?>