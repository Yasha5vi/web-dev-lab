<?php
echo "gettype and settype<br>";

$a = 10;
echo "get type function : ".gettype($a)."<br>";
settype($a,"string");
echo "set type function : ".gettype($a);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 12</title>
</head>
<body>
    <form method="post">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST["name"];
            if(isset($name)){
                echo "name is set to $name <br>";
            }else{
                echo "name is not set<br>";
            }

            unset($name);

            if(isset($name)){
                echo "name is set to $name <br>";
            }else{
                echo "name is unset <br>";
            }
        }
    
    ?>
</body>
</html>