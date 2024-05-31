<?php 
include("conexion.php");

	$x=$_POST['x'];
	//0=cve_usuarios, 1=nombre, 6=password, 4=nivel_usuario
	$consulta = mysql_query("SELECT cve_usuarios, usuario, nombre, password, nivel_usuario FROM usuarios WHERE cve_usuarios='$x'");

	while($registro = mysql_fetch_row($consulta)){
		$decoUser = base64_decode($registro[1]);
		$decoPass = base64_decode($registro[3]);
		echo " <input id='idValidarUsuarioUpdate' type='text'  name='cve' value='$registro[0]' hidden> ";
			print "<h3><small id='existeUpdate'>Usuario:</small></h3>";
		print " <input id='validarUsuarioUpdate' type='text' onkeyup ='validarNombreUsuarioUpdate()' class='form-control' maxlength='300' value='$decoUser' name='user'
			pattern='[a-z*A-Z*0-9*]*'
			required
		> ";
			print "<h3><small>Nombre:<small></h3>";
		print " <input type='text' class='form-control' maxlength='300' value='$registro[2]' name='name'
			pattern='[a-z*A-Z*0-9*[ ]*]*'
			required
		> ";
			print "<h3><small>Password:</small></h3>";
		print " <input type='text' class='form-control' maxlength='300' value='$decoPass' name='password'
		required
		> ";
			print "<h3></small>Nivel [1-3]:</small></h3>";
		print " <input type='text' class='form-control' maxlength='300' value='$registro[4]' name='level'
			pattern='[1-3]*'
			required
		> ";

	}

 ?>