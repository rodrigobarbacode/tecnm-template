<?php
	
date_default_timezone_set('America/Tijuana');
$servername = "localhost";
$username = "root";
//$password = "";
$password = "Tzuput4r0";
$dbname = "bbva";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}