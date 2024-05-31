<?php 
	include("conexion.php");

	$lineas = "";
	$tabla = "";
	$consulta = "";

	$consulta = mysql_query("SELECT cve_usuarios, usuario, nombre FROM usuarios");
	$lineas.="<thead><tr> <td>Clave usuario</td> <td>Usuario</td> <td>Nombre</td> <td>Asignar</td> </tr></thead><tbody>";
		//0= cve_usuarios,1= nombre,5= usuario
	while($registro = mysql_fetch_row($consulta)){
		 $decoUser=base64_decode($registro[1]);
		$lineas.="<tr><td> $registro[0]</td>
				<td> 
					<form action='../php/mostrarPrivilegios.php' method='post'>
						<button type='button' class='btn btn-link' style='text-decoration:none; color:black;' id='$registro[0]' onClick='reply_click(this.id)' data-toggle='modal' data-target='#mUsuario'>  $decoUser </button> 
					</form>
				</td> 
				<td>
					$registro[2]
				</td>
				<td>
					<form action='../php/mostrarPrivilegios.php' method='post'>
						<button type='button' class='btn btn-link' style='text-decoration:none; color:black;' id='$registro[0]' onClick='reply_click(this.id)' data-toggle='modal' data-target='#privilegios'><span class='glyphicon glyphicon-tasks'></span> Conceptos</button> 
					</form>
				</td>
				</tr>";
		
	}	
		//$lineas.="</tbody>";
	$tabla="<table id='datatable' class='table' cellspacing='0'
	cellpadding='3'     width='100%'> $lineas </tbody></table>";
	print  $tabla;

 ?>