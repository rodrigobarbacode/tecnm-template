<?php

class AuthController {
	public $default_layout = "layout";

	public function logoutAction(){
		unset($_SESSION["admin_id"]);
		session_destroy();
		Core::redir("./");
	}

	public function loginAction(){
		$user = $_POST['email'];
		$pass = $_POST['password'];

		$base = new Database();
		$con = $base->connect();
    	$sql = "select * from admin where (email= \"".$user."\" or username= \"".$user."\" ) and password= \"".$pass."\"";
		//print $sql;
		$query = $con->query($sql);
		$found = false;
		$userid = null;
		while($r = $query->fetch_array()){
			$found = true ;
			$userid = $r['id'];
		}
		if($found==true) {
			session_start();
		//	print $userid;
			$_SESSION['admin_id']=$userid ;
		//	setcookie('userid',$userid);
		//	print $_SESSION['userid'];
			print "Cargando ... $user";
			print "<script>window.location='./';</script>";
		}else {
			print "<script>window.location='./';</script>";
		}
	}


}


?>