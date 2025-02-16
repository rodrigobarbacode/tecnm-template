<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<title>Actividades Complementarias</title>
<script type="text/javascript">
function validaEliminar(){
if(!confirm('Desea eliminar esta actividad?'))
{
return false;	
}
}
</script>
<script language="javascript" type="text/javascript">
$(document).ready(function()
{
	$("#actividad").change(function()	{
		 
		 $.get("getCreditos.php",{ uname:$(this).val() } ,function(data)
        { 
		  if(data > 0) //if username is there
		  {
		  	 $("#creditos").val(data);
		
		  	/*$("#creditos").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			   $(this).html(data+'').addClass('messageboxerror').fadeTo(900,1);
			});	*/	
          }
		   else
		    $("#creditos").val('');
				
        });
 
	});
});

$(document).ready(function() {
    $('#form').submit(function(e){ // <<< This selector needs to point to your form.
        if ($('#actividad').val() == "0") {
            alert("Seleccionar Actividad");
			$(this).focus();
            e.preventDefault();
            return false;
        }
		if ($('#periodo').val() == "0") {
            alert("Seleccionar Período Inicial");
			$(this).focus();
            e.preventDefault();
            return false;
        }
			 
    });
	
});

$(document).ready(function(){
    $('#tipor').change(function(){
        if(this.checked)
            $('#autoUpdate').fadeIn('slow');
        else
            $('#autoUpdate').fadeOut('slow');

    });
});
</script>
</head>

<body>
 
 <?php  
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'actividades_comp', 'actComp.23'); 
  $cve_registro ="";
  $cve_actividad = 0;
  $creditos = "";
  $periodo_inicial = 0;
  $periodo_final = 0;
  $comentario = "";
  $nivel = 0;
  $tipor = 0;
 if(isset($_GET["cve_registro"]))
 {
 $cve_registro = $_GET["cve_registro"];
 
 $stmt = $db->query("SELECT CONCAT( actividad,  ' (', ra.creditos,  ')' ) AS actividad, p1.cve_periodo AS periodo_inicial, p2.cve_periodo AS periodo_final, ra.comentario, ra.creditos, ra.cve_registro,ra.cve_actividad, ra.creditos,ra.nivel,ra.tipor
FROM registro_actividad ra
INNER JOIN alumnos a ON a.no_de_control = ra.no_de_control
INNER JOIN actividades ac ON ac.cve_actividad = ra.cve_actividad
INNER JOIN periodos p1 ON p1.cve_periodo = periodo_inicial
INNER JOIN periodos p2 ON p2.cve_periodo = periodo_final
WHERE ra.cve_registro =". $cve_registro." LIMIT 0 , 5");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 
	$cve_actividad = $row['cve_actividad'];
  $creditos = $row['creditos'];
  $periodo_inicial = $row['periodo_inicial'];
  $periodo_final = $row['periodo_final'];
  $comentario = $row['comentario'];
    $nivel = $row['nivel'];
	$tipor = $row['tipor'];

}
   
  
$row = null;
$stmt = null;
 } 
 
  ?>
 
<form action="registro_save.php" method="post" class="elegant-aero" id="form">
<input type="hidden" value="<?php echo $_GET["id"]?>" name="id"/>
<input type="hidden" value="<?php echo $cve_registro?>" name="cve_registro"/>
    <h1>Registro de Actividad
        <span>Llenar todos los campos.</span>
    </h1>
     <label>
        <span>Actividad :</span>
 <select name="actividad" id="actividad" onchange="getIPL(this.value);">
 <option value="0">-Seleccionar-</option>
        <?php
		$stmt = $db->query('SELECT * FROM actividades');
 

 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	?>
    
    <option 
    <?php if ($row['cve_actividad'] == $cve_actividad){echo "selected";}?>
    value="<?php echo $row['cve_actividad']?>"><?php echo $row['actividad']?> </option>

 <?php
}
		?>
       </select>
       
    </label>
    <label>
    <span>Cr&eacute;ditos:</span>
    <input id="creditos" value="<?php echo $creditos ?>" name="creditos" type="number" min="1" required />
    </label>
   
    <label>
    <span>Reglamento 2016:</span>
    <input id="tipor" type="checkbox" <?php if($tipor ==1)echo "checked"  ?> name="tipor" align="left" />
    </label>
 
  <div id="autoUpdate" class="autoUpdate" <?php if($tipor ==0){?> style="display:none;"<?php }?>>
     <label>
    <span>Nivel de Desempe&ntilde;o:</span>
    <input id="nivel" value="<?php echo $nivel ?>" name="nivel" type="number" max="4" min="0" required />
    </label>
 </div>
    <label>
        <span>Per&iacute;odo Inicio:</span>
 <select name="periodo" id="periodo">
 <option 

 value="0">-Seleccionar-</option>
        <?php
		$stmt = $db->prepare('SELECT * FROM periodos');
 $stmt->execute();
 $vars =  $stmt->fetchAll(); // Almacenamos el array de todos los
 
foreach ( $vars as $var ) {
?>
    <option 
     <?php if ($var['cve_periodo'] == $periodo_inicial){echo "selected";}?>
    value="<?php echo $var['cve_periodo']?>"><?php echo $var['periodo']?> </option>

 <?php
}
		?>
  
	
       </select>
    </label>
    <label>
        <span>Per&iacute;odo Fin:</span>
 <select name="periodo2">
 <option value="0">-Seleccionar-</option>
 <?php
      foreach ( $vars as $var ) {
?>
    <option 
     <?php if ($var['cve_periodo'] == $periodo_final){echo "selected";}?>
    value="<?php echo $var['cve_periodo']?>"><?php echo $var['periodo']?> </option>

 <?php
}
		?>
       </select>
    </label>
    <label>
    <span>Observaci&oacute;n:</span>
    <textarea name="observa"> <?php echo $comentario ?></textarea>
    </label>
         
     <div style="text-align:right">
      
        <input type="submit" name="boton" class="button" <?php if($cve_registro <> "")	echo "value='Actualizar'"; else echo "value='Guardar'"?> /> 
          <?php 
	if($cve_registro <> "")
	{
	?> 
      
        <input type="submit" name="boton" class="buttonDelete"  value="Eliminar" onClick=" return validaEliminar()"/> 
     <?php	
	}

	?>
</div>   
 
</form>

</body>
</html>
