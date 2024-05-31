<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["admin"]))  
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
 <img src="img/encabezado.jpg" 
 class="img-rounded" id="encabezado"/>
 </header>
 

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/extraescolares/index_admin.php">Listas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/extraescolares/action_asign.php">Re-Asignar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/extraescolares/printer_totales.php" target="_blank">Totales <i class='fas fa-print'></i></a>
      </li>  
    </ul> 
      </div>  
</nav>

<div class="container text-center" style="margin-top:30px">
  <h3>Listas</h3>
   
    
</div>
<div class="container d-flex justify-content-center"> 
    
     <table class='table table-hover table-responsive tableFixHead'  >
    <thead>
      <tr>
        <th>Inscritos</th>
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
	$stmt = $conn->query("select count(aa.id_actividad) as total, a.* from actividades a left join actividades_alumno aa on aa.id_actividad = a.id_actividad GROUP by a.id_actividad");
while ($row = $stmt->fetch()) {
	
	echo "
      <tr>
        <td>". $row['total']."</td>
		<td><div class='custom-control custom-radio'> ". $row['actividad']." </td>
        <td>". $row['lunes']."</td>
		<td>". $row['martes']."</td>
		<td>". $row['miercoles']."</td>
		<td>". $row['jueves']."</td>
		<td>". $row['viernes']."</td>
		<td>". $row['sabado']."</td>
        <td>". $row['lugar']."</td>
        <td>". $row['RFC']."</td>
		<td><a type='button' class='btn btn-primary btn-sm' target='_blank' href='/extraescolares/printer.php?lista=". $row['id_actividad']."'><i class='fas fa-print'></i></a></td>
      </tr> "
    ;
   
}
echo "</tbody>
  </table>";
$conn = null;

	?>     
    
    <div class="text-right">
     
 
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
      header("location:login.php");  
 }  
 ?> 
 
 