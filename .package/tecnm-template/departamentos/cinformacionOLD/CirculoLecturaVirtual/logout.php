<?php

session_start();
session_destroy();

	        setcookie('idusuario',$_SESSION['idusuario'], time() -7200,"/");
		    setcookie('nombres',$_SESSION['idusuario'], time() -7200,"/");
		    setcookie('paterno',$_SESSION['idusuario'], time() -7200,"/");
		    setcookie('tipousuario',$_SESSION['idusuario'], time() -7200,"/");
			
header("location:index.php");
?>