<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
 require_once("php/connection.php");
 //     echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
   //   echo '<br /><br /><a href="logout.php">Logout</a>';  
 ?>
 <!--Inicia HTML-->
 
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
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .tableFixHead          {}
.tableFixHead thead th { position: sticky; top: 0; background-color:#fff }
table  { border-collapse: collapse; width: 100%; }
  </style>
  <script type="text/javascript">
function validateRadio (radios)
{
    for (i = 0; i < radios.length; ++ i)
    {
        if (radios [i].checked) return confirm('Estas seguro de inscribirte a esta actividad extraescolar?');
    }
    return false;
}

function validateForm()
{
    if(validateRadio (document.forms["form"]["actividades"]))
    {
		return true;
        
    }
    else
    {
        alert('Selecciona una actividad');
        return false;
    }
}
</script>
</head>
<body>
 
   <header class="text-center"> 
 <img src="img/encabezado.jpg" class="img-fluid" 
 class="img-rounded" id="encabezado"/>
 </header>
 <hr/>


<div class="container text-center" style="margin-top:30px">
  <h3> Selecciona la actividad extraescolar a la que deseas inscribirte</h3>
  <p> Una vez que aceptes, no se podran hacer cambios.</p> 
</div>
<div class="container">
 <form action="action_save.php" name="form" onsubmit="return validateForm()" method="POST">
    
     <table class='table table-hover table-responsive tableFixHead' style='max-height:900px;'>
    <thead>
      <tr>
        <th>Actividad</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
        <th>Lugar</th>
        <th>Maestro</th> 
		
      </tr>
    </thead>
    <tbody>
  
    <?php
	$stmt = $conn->query("SELECT *   FROM actividades");
while ($row = $stmt->fetch()) {
	
	echo "
      <tr>
        
		<td><div class='custom-control custom-radio'>
      <input type='radio' class='custom-control-input' value='". $row['id_actividad']."' id='customRadio". $row['id_actividad']."' name='actividades'>
      <label class='custom-control-label' for='customRadio". $row['id_actividad']."'>". $row['actividad']."</label>
    </div> </td>
        <td>". $row['lunes']."</td>
		<td>". $row['martes']."</td>
		<td>". $row['miercoles']."</td>
		<td>". $row['jueves']."</td>
		<td>". $row['viernes']."</td>
		<td>". $row['sabado']."</td>
        <td>". $row['lugar']."</td>
        <td>". $row['RFC']."</td>
      </tr> "
    ;
   
}
echo "</tbody>
  </table>";
$conn = null;

	?>     
    
    <div class="text-right">
    <button type="submit" class="btn btn-primary"  >Guardar</button></div>
  </form>
</div>
 <br/>
 <br/>
 <br/>

</body>
</html>

 
 
 <!--FIN HTML-->
 <?php
 
 
 
 
 }  
 else  
 {  
      header("location:index.php");  
 }  
 ?> 
 
 