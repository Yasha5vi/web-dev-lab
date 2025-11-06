<?php
$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("localhost","root","");

if(!$conn){
    die("unable to connect");
}

mysqli_query($conn,"
    CREATE DATABASE IF NOT EXISTS db
");

mysqli_select_db($conn,"db");

mysqli_query($conn,"
    CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
    )
");


?>