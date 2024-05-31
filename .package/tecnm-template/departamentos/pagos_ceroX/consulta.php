<?php
require 'conexion.php';
$sql       = "SELECT * FROM semestrecero";
$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
			<html>
			<head>
			<title>Inscripcion Semestre Cero</title>
				<meta charset="utf-8">

			  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<style type="text/css">

			</style>
			</head>
			<body>

	<div class=" container-fluid pt-4" >
	<div class="container-fluid" id="PrintArea">
  <table class="table table-bordered text-center">
    <thead class="table-primary">
      <tr>
        <th>ID</th>
		<th>CURP</th>
		<th>NOMBRE</th>
		<th>SEXO</th>
		<th>CORREO</th>
		<th>REFERENCIA</th>

      </tr>
    </thead>
    <tbody>
	<?php

while ($row = $resultado->fetch_assoc()) {
    $i_d         = $row['id_cero'];
    $cur_p       = $row['curp'];
    $nombr_e     = $row['nombre'];
    $ap_pater_no = $row['ap_paterno'];
    $ap_mater_no = $row['ap_materno'];
    $referenc_ia = $row['referencia'];
    $sex_0       = $row['sexo'];
    $correo      = $row['correo'];
    echo " <tr>";
    echo "<td> $i_d</td>";
    echo "<td> $cur_p</td>";
    echo "<td> $nombr_e $ap_pater_no $ap_mater_no</td>";
    echo "<td> $sex_0</td>";
    echo "<td> $correo</td>";
    echo "<td> $referenc_ia</td>";
    echo " </tr>";
}
?>
    </tbody>
  </table>
  </div>
  <div class="container text-center p-3">
            <button href="javascript:void(0)" id="imprime" class="btn btn-lg btn-danger">
                Imprimir
            </button>
            <br>
    </div>
</div>
<script src="js/jquery-2.1.0.js"></script>
			  <script src="js/jquery.PrintArea.js"></script>
			  <script type="text/javascript">
			$("#imprime").click(function (){
			$("div#PrintArea").printArea();
			})
			</script>
			</body>
			</html>

