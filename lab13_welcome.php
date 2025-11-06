<?php
    session_start();
    if($_SESSION["loggedin"] == false){
        header("Location: lab13_login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <p>Success logged in </p>
    <a href="lab13_logout.php"> Logout</a>
</body>
</html>