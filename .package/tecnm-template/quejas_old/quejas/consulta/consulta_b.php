 <?php
 

$servername = "localhost";
$username = "root";
$password = "itmXoto13";
$dbname = "quejas";
$rows = '';

if(isset($_GET['op']))
$op = $_GET['op'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select * from quejasAlumnos where ATENDIDA = '$op';");
    $stmt->execute();
 
    while( $resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
         $rows .=  "<TR>\n";
		 
		  
            $rows  .="<TD><font size=5><center><A HREF=\"actualizar1.php?op=".$op."&fecha_queja=" . $resultado['FECHA_QUEJA'] . "\" TARGET=\"_blank\">".$resultado['FECHA_QUEJA']."</A> </TD>\n"; 
			 
            $rows .= "<TD><font size=5><center>" . $resultado['CONTROL'] . "</center></font></TD>" ;
            $rows  .= "</TR>";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consulta de Quejas</title>
  <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=consulta_b.php?op=<?PHP echo $op;?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Consulta de Quejas</h2>
  <p>Escribir n&uacute;mero de control o fecha para filtrar</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Filtrar..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Fecha Queja</th>
        <th>No. Control</th> 
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
	  echo $rows;
	  ?>
    </tbody>
  </table>
  
 
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
