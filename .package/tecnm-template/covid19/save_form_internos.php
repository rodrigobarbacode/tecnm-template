 
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</head>
<body>

<div class="container">

<?php
session_start();
if(isset($_SESSION['cve_usuario'])){
$realiza = $_SESSION['cve_usuario'];
$switch1 = 0;
$switch2 = 0;
$switch3 = 0;
$switch4 = 0;
$switch5 = 0;
$usr = $_POST['usr'];
if(isset($_POST['switch1'])){
	$switch1 = 1;
}
if(isset($_POST['switch2'])){
	$switch2 = 1;
}
if(isset($_POST['switch3'])){
	$switch3 = 1;
}
if(isset($_POST['switch4'])){
	$switch4 = 1;
}
if(isset($_POST['switch5'])){
	$switch5 = 1;
}

$servername = "localhost";
$username = "root";
$password = "itmXoto13";
$dbname = "covid19";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO respuestas (usr, switch1, switch2, switch3, switch4, switch5, realiza,tipo)
  VALUES ('$usr', '$switch1', '$switch2', '$switch3', '$switch4', '$switch5', '$realiza',1)";
  // use exec() because no results are returned
  $conn->exec($sql);
 // header("Location:form_internos.php");
 header( "refresh:3;url=form_internos.php" );
  ?>
 

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style=" background-color: #33cc33;color:#fff">
          <h4 class="modal-title">Registro guardado con exito</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        

  
  
  
  <?php
} catch(PDOException $e) {
//echo $sql . "<br>" . $e->getMessage()."<br>";
 header( "refresh:3;url=form_internos.php" );
  ?>
 

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style=" background-color: red;color:#fff">
          <h4 class="modal-title">ERROR Intentelo de nuevo.</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       
        

  
  
  
  <?php
  
}

$conn = null;
}
else
	header("Location:index.php");

?>

      </div>
    </div>
  </div>
  
</div>

</body>
</html>
