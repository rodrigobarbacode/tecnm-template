<?php
session_start();
$out = array('error' => false);
$data = json_decode(file_get_contents("php://input"));
$request = $data->request;
$conn = new mysqli("mariadb-php", "oficios", "sysOficios.23", "aoc");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}    

if($request == 1){
	$username = $data->username;
	$password = md5($data->password);          

if($username==''){
	$out['error'] = true;
	$out['message'] = "Username is required";
}
else if($password==''){
	$out['error'] = true;
	$out['message'] = "Password is required";
}
else{
	$sql = "select * from usuarios where usuario='$username' and password='$password'";
	$query = $conn->query($sql);

	if($query->num_rows>0){
		$row=$query->fetch_array();
		$_SESSION['user']=$row['usuario'];
		$out['message'] = "Login Correcto!";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Login Incorrecto! ";
	}
}
}
$conn->close();

header("Content-type: application/json");
echo json_encode($out);
die();
?>
