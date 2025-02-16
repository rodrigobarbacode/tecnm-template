<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css" />
<title>Documento sin título</title>
<script type="text/javascript">
function validaEliminar(){
if(!confirm('Desea eliminar este periodo?'))
{
return false;	
}
}
</script>

 

</head>

<body>
 <?php
 try{
	 $cve_periodo = "";
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'actividades_comp', 'actComp.23'); 
 if(isset($_GET["id"]))
 $cve_periodo = $_GET["id"];
 
   $periodo = null;
 $creditos = null; 
 $date1 = null;
 $date2 = null;
 $error = "";
 if(isset($_GET["error"]))
 $error = $_GET["error"];
 
  if($cve_periodo <> "")
  {
	$stmt = $db->query('SELECT * FROM periodos WHERE cve_periodo ='.$cve_periodo);
 

 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
 $periodo = $row['periodo'];
 $creditos = $row['creditos'];
 $date1 = $row['date1'];
 $date2 = $row['date2']; 
}
}}
catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
 ?>
 
<form action="periodo_save.php" method="post" class="elegant-aero">
    <h1>Periodos
        <span>Llenar todos los campos.</span>
    </h1>
    <label>
        <span>Inicio :</span>
        <input type="text" id="datetimepicker1" name="datetimepicker1" required runat="server"   value="<?php echo $date1?>" onChange="validaFechas()" autocomplete="off"/>
    </label>
      <label>
        <span>Fin :</span>
       <input type="text" id="datetimepicker2" name="datetimepicker2"  required runat="server"   value="<?php echo $date2?>" onChange="validaFechas()"  autocomplete="off"/>
    </label>
    <label>
        <span>Periodo :</span>
        <input id="periodo" type="text" name="periodo" placeholder="Periodo" required value="<?php echo $periodo?>" />
    </label>
   
         
     <div style="text-align:right">
       <?php if ($error != 0){
		   ?>
           <label style="color:#F00"> 
           <?php
		   if ($error == 1){
		   echo "No se puede eliminar este Periodo. Se encuentra relacionada con uno o mas alumnos.";
		   }
		   if ($error == 2){
		   echo "Ya existe un periodo en este rango de fechas";
		   }
		   ?> 
           </label>
      <?php
	 }
	  
	 ?>
        <input type="submit" name="boton" class="button" <?php if($cve_periodo <> "")	echo "value='Actualizar'"; else echo "value='Guardar'"?>onClick=" return validaFechas();" /> 
          <?php 
	if($cve_periodo <> "")
	{
	?> 
      
        <input type="submit" name="boton" class="buttonDelete"  value="Eliminar" onClick=" return validaEliminar();"/> 
     <?php	
	}

	?>
</div>   
<input type="hidden" name="id" value="<?php echo $cve_periodo?>">
      
</form>
<script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.datetimepicker.js"></script>
    <script type="text/javascript">
    function validaFechas()
    { 
    var fecha1 = $('#datetimepicker1').val();
    var fecha2 = $('#datetimepicker2').val();
   
   //comparar las fechas, inicial tiene que ser mayor que la final
    if(Date.parse(fecha2) <= Date.parse(fecha1)){
    alert("Fecha final debe ser mayor a la fecha inicial."); 
    $('#datetimepicker2').val() = "";
	return false;
    }
	 
	
    }


$('#datetimepicker1').datetimepicker({
	yearOffset:0,
	lang:'es',
	timepicker:false,
	format:'Y/m/d',
	formatDate:'Y/m/d',
	 
});
$('#datetimepicker2').datetimepicker({
	yearOffset:0,
	lang:'es',
	timepicker:false,
    format:'Y/m/d',
	formatDate:'Y/m/d',
	 
});
    </script>
</body>
</html>
