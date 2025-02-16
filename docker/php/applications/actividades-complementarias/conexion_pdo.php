<?php
 
$servername = "mariadb-php";
$username = "actividades_comp";
$password = "actComp.23";
$dbname = "actividades_complementarias";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
} 
?>