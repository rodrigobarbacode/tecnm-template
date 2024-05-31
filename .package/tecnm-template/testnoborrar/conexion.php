<?php
function dbConnect (){
    $conn = null;
    $host = 'localhost';
    $db =   'TIWEB1';
    $user = 'root';
    $pwd =  'itmXoto13';
    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //echo 'Connected succesfully.<br>';
    }
    catch (PDOException $e) {
        echo $e.'<p>Cannot connect to database !!</p>';
        exit;
    }
    return $conn;
	
 }
 
 ?>
