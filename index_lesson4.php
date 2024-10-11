<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Practice 1
    <form action="index_lesson4.php" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="username" /><br>
        <label for="">Password:</label><br>
        <input type="password" name="password" /><br>
        <input type="submit" value="Log in">
    </form>
    -->
    <form action="index_lesson4.php" method="post">
        <label for="">Quantity: </label> <br>
        <input type="text" name="quantity">
        <input type="submit" value="total" >
    </form>
</body>
</html>
<?php 
    // $_GET = Data is appended to the URL, Not secure, Char limit, Bookmark is possible w/ values, GET requests can be cached, Better for a search page
    // $_POST = Data is packages inside the body of the HTTP request. More secure, no data limit, can't bookmark, GET requests aren't cached, better for submitting credentails.
    /* Practice 1
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
    */
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total =  null;

    $total = $quantity * $price;

    echo"You have ordered {$quantity} x {$item}/s <br>";
    echo"Your total is: \${$total}";
?>