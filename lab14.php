<?php
session_start();

if(!isset($_SESSION["counter"])){
    $_SESSION["counter"] = 1;
}else{
    $session_value = $_SESSION["counter"];
    $_SESSION["counter"] = $session_value+1;
}

echo "counter : ".$_SESSION["counter"]."<br>";
if(!isset($_COOKIE["cookie_counter"])){
    setcookie("cookie_counter",1,time()+86400);
}else{
    $cookie_value = $_COOKIE["cookie_counter"];
}
setcookie("cookie_counter",$cookie_value+1,time()+86400);
echo "cookie counter : ".$_COOKIE["cookie_counter"]."<br>";

?>