<?php
session_start();

if(isset($_SESSION["username"])){
    header("Location : lab13_welcome.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "john" && $password == "123"){
        $_SESSION["username"] = $username;
        $_SESSION["loggedin"] = true;

        header("Location: lab13_welcome.php");
        exit();
    }else{
        header("Location: lab13_login.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label for="username">username : </label>
        <input type="text" name="username" id="username">
        <label for="password">password : </label>
        <input type="text" name="password" id="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

