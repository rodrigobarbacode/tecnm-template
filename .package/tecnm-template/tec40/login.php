<?php
session_start();

$conn = new mysqli("localhost", "root", "Tzuput4r0", "tec40");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$out = array('error' => false);

$username = $_POST['username'];
$password = md5($_POST['password']);

if($username==''){
	$out['error'] = true;
	$out['message'] = "Username is required";
}
else if($password==''){
	$out['error'] = true;
	$out['message'] = "Password is required";
}
else{
	$sql = "select * from usuarios where email='$username' and password='$password'";
	$query = $conn->query($sql);

	if($query->num_rows>0){
		$row=$query->fetch_array();
		$_SESSION['user']=$row['email'];
		$out['message'] = "Login Correcto!";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Login Incorrecto!";
	}
}



$conn->close();

header("Content-type: application/json");
echo json_encode($out);
die();


?>
