	<head>
 <meta charset="utf-8">
 <!--<meta http-equiv="refresh" content="3"/>-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
 
<title>Monitoreo</title>
</head>
<body>
<div class="container">
<img class="text-center responsive" src="img/banner_web.jpg"/>
<h1 class="text-center">
..::Monitoreo de pH de Aguas Residuales::..
</h1>
</div>
<br/>  
<div class="container">   
 <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Range A:</td>
            <td><input type="text" id="min" name="min"></td>
        </tr>
        <tr>
            <td>Range B:</td>
            <td><input type="text" id="max" name="max"></td>
        </tr>
    </tbody></table>
	<br/>
	<table id="example" class="display table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ph</th>
                <th>Date</th>
                
            </tr>
        </thead>
        <tbody>
<?php
 

$servername = "localhost";
$username = "root";
$password = "Tzuput4r0";
$dbname = "lecturaPh";
 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM lectura ORDER BY fecha DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["Po_php"]."</td><td> ".$row["fecha"]."</td></tr>";
    }
     
} else {
    echo "0 results";
}
$conn->close();
?>
 </tbody>
        <tfoot>
            <tr>
                 <th>ID</th>
                <th>PH</th>
                <th>Date</th>
            </tr>
        </tfoot>
    </table>
	</div>
<script>
/* Custom filtering function which will search data in column four between two values */
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[1] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#example').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
} );
</script>
 
</body>
</html>