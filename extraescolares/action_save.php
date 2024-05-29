 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Actividades Extraescolares</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script type="text/javascript">
      function imprime_hoja()
            {
            for (i = 0; i < document.all.length; i++) 
                {
                    if (document.all[i].id.substring(8,0)=="imprimir" )
                    {
                        document.all[i].style.visibility='hidden';
                    }
                }

                self.print();
                setTimeout("muestra()", 7000);
            }</script>
            <style>
			@media print {
  * { margin: 0 !important; padding: 0 !important; }
  #controls, .footer, .footerarea{ display: none; }
  html, body, h3,h2,h1 {
    /*changing width to 100% causes huge overflow and wrap*/
    height:100%; 
    overflow: hidden;
    background: #FFF; 
    font-size: 9.5pt;
	padding-bottom: 15 !important;
  }

  .template { width: auto; left:0; top:0; }
  img { width:50%; padding-bottom:50px !important }
  #encabezado {width:100%;}	
  li { margin: 0 0 10px 20px !important;}
  #imprimir	{ display: none; }
}
    </style>
			
  </head>
<?php
session_start();  
$no_control = "";
 if(isset($_SESSION["username"]) || isset($_SESSION["admin"]))  
 {  
 if(isset($_POST["username"])){
	 $_SESSION["nocontrol"]= $_POST["username"];
 $no_control = $_POST["username"];
 }
 else
 $no_control = $_SESSION["username"];
 
 $number_of_rows = 0;
$alumno = "";
$tabla="";
if(isset($_POST['actividades']))
{
	
	require_once("php/connection.php");
	 
	 
	try {    
	$sql = "DELETE FROM actividades_alumno WHERE id_alumno = '".$no_control."' AND periodo = '20201'";
	 $conn->exec($sql); 
	 
    $sql = "INSERT INTO actividades_alumno (id_actividad, id_alumno, periodo)
    VALUES ('".$_POST['actividades']."', '".$no_control."', '20201')";
    // use exec() because no results are returned
    $conn->exec($sql); 
	 
	header("Location: action_view.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
// echo "You have selected :".$_POST['actividades'];    Displaying Selected Value
}
 }
?>
<body>
<header class="text-center"> 
 <img src="img/encabezado.jpg" 
 class="img-rounded" id="encabezado"/>
 </header>
 

<div class="container text-center" style="margin-top:30px">
  <h3> <?php echo $alumno;?></h3>
  <p> Te has inscrito de manera correcta.</p> 
</div>
<div class="container d-flex justify-content-center">
 <form action="action_save.php" name="form" onsubmit="return validateForm()" method="POST">
    
     <table class='table table-hover table-responsive'>
    <thead>
      <tr>
        <th>Actividad</th>
        <th>Horario</th>
        <th>Lugar</th>
        <th>Maestro</th> 
		
      </tr>
    </thead>
    <tbody>
  
    <?php
	 
	 if($number_of_rows > 0){
     	echo $tabla;
	
	
	}
else
{
	echo "<td colspan='4'>ERROR AL INSCRIBIRTE INTENTA DE NUEVO</td>";
	}
   
 
echo "</tbody>
  </table>"; 

	?>     
    
    <div class="text-center">
    <button type="button" id="imprimir" class="btn btn-primary btn-lg" onclick="javascript: imprime_hoja();"><i class="fas fa-print"></i></button>
       
    </div>
  </form>
</div>
 <br/>
 <br/>
 <br/> 

 
 
 <!--FIN HTML-->
</body>
</html>