<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lesson18.php" method="post">Username: <br>
        <input type="text" name="username"><br>
        Age:<br>
        <input type="text" name="age"><br>
        Email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php 

    /* Example 1
    if(isset($_POST["login"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello {$username}";

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo "You are {$age} years old";

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "Your email is {$email}";
    }
    */
    
    if(isset($_POST["login"])) {
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($age)) {
            echo "That number wasn't valid";
        } else {
            echo "You are $age years old";
        }

        if(empty($email)) {
            echo "That's not a valid email";
        } else {
            echo "Your email is $email";
        }
    }
?>