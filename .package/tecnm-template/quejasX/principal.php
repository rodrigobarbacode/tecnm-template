<!-- Desarrollado por: Francisco Ruiz - German Avila -->
<?php
require_once 'conexion.php';

//$sql       = 'SELECT a.* ,r.* FROM alumnos as a INNER JOIN  reportes as r ON a.no_control=r.no_control where no_reporte="47"';
$sql       = "SELECT r.*, a.* FROM reportes AS r INNER JOIN alumnos AS a ON r.no_control = a.no_control";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    ?>
<!DOCTYPE html>
<html>
<head lang="es">
	<title>BUZON DE QUEJAS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devide-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
	<style type="text/css">
		.main-footer,a{
			color: white;
		}

	</style>
</head>
<body >
	<nav style="background-color: #13322b;"> <?php require_once 'plantilla/barra_navegacion_gobierno.php'?></nav>
	<div class="container-fluid m-auto pt-4">
		<table class="table table-sm table-striped table-bordered w-100" id="iddatatable">
			<thead class="bg-info text-center">
				<tr>
					<td>No.</td>
					<td>Tipo</td>
					<td>No. Control</td>
					<td>Nombre</td>
					<td>Correo</td>
					<td>Descripcion</td>
					<td>Fecha de Reporte</td>
					<td>Atendido</td>
					<td>Fecha Atendido</td>
					<td>aprovar</td>
				</tr>
			</thead>

			<tbody class="text-center">
				<?php

    while ($datos = $resultado->fetch_assoc()) {

        ?>
				<tr>
					<td><?php echo $datos['id_reporte'] ?></td>
					<td><?php echo $datos['tipo_reporte'] ?></td>
					<td><?php echo $datos['no_control'] ?></td>
					<td><?php echo $datos['nombre'] ?></td>
					<td><?php echo $datos['correo'] ?></td>
					<td><?php echo $datos['descripcion'] ?></td>
					<td><?php echo $datos['fecha_reporte'] ?></td>
					<td><?php echo $datos['atendido'] ?></td>
					<td><?php echo $datos['fecha_atendida'] ?></td>
					<td>
						<i class="material-icons "  style="background-color: #32a728; color: white; "data-toggle="tooltip" id="abrir" title="Editar" >&#xE876;</i></a>
					</td>
				</tr>
				<?php
}
} else {
    echo "0 results";
}
$conexion->close();
?>
			</tbody>




		</table>

	</div>

	<footer style="background-color: #13322b;"><?php require_once 'plantilla/footer.php'?></footer>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script >
	$('#iddatatable').DataTable({
        "language": {
        	"lengthMenu": "Mostrando _MENU_ Resultados por pagina",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en la tabla",
            "sInfo":           "Mostrando Reportes del _START_ al _END_ de un total de _TOTAL_ Reportes",
            "sInfoEmpty":      "Mostrando Reportes del 0 al 0 de un total de 0 Reportes",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ Reportes)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                 "sPrevious": "Anterior"
            }
        }
    });
</script>
</body>
</html>
