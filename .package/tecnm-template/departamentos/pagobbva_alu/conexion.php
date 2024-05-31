<?php
	
date_default_timezone_set('America/Tijuana');
$servername = "localhost";
$username = "lineas_pagos";
//$password = "";
$password = "lineaPago.23";
$dbname = "bbva";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}