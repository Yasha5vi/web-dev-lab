<?php
session_start();
session_destroy();
header("Location: lab13_login.php");
exit();
?>