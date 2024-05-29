<?php
$servername = "localhost";
$username = "root";
$password = "Tzuput4r0";

try {
    $conn = new PDO("mysql:host=$servername;dbname=extraescolares", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>