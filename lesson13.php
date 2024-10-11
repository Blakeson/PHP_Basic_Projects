<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() and empty()</title>
</head>
<body>
    <form action="lesson13.php" method="post">
        <label for="">Username: </label>
        <input type="text" name="username"><br>
        <label for="">Password:</label>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>
<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable isn't declared, false, null

    /* Example 1
    $username = "Bro";

    if(empty($username)) {
        echo "This variable is empty";
    } else {
        echo "This variable is not empty";
    }
    */

    /* Example 2
    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
    */

    if(isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Username is missing";
        } else if (empty($password)) {
            echo "Password is missing";
        } else {
            echo "Hello {$username}";
        }
    }
?>