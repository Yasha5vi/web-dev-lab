<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 11</title>
</head>
<body>
    <form method = "post">
        <label for="numa">A : </label>
        <input id = "numa" name = "a" type="text"/>
        <label for="numb">B : </label>
        <input id = "numb" name = "b" type="text"/>
        <button type = "submit">Submit</button>
    </form>
</body>
</html>

<?php
    $a = 0;
    $b = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $a = $_POST["a"];
        $b = $_POST["b"];

        echo "before swaping :";
        echo "<br>";
        echo "A : $a, B : $b";
        echo "<br>";
        $temp = $a;
        $a = $b;
        $b = $temp;
        echo "after swapping : ";
        echo "<br>";
        echo "A : $a, B : $b";
    }
?>