<?php

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

if (isset($_POST['referencia'])) {  
$referencia =$_POST['referencia'];
$str="";
$resutlss="";
 
  
$servername = "localhost";
$username = "root";
$password = "itmXoto13";
$dbname = "robotronix";

$nombre = "";
$count = 0;
$categoria="";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT *,concat(nombre,'-',institucion,'-',referencia,'-',email) as info, categoria FROM `participantes` WHERE referencia = '$referencia' OR email = '$referencia' OR institucion like '%$referencia%'");
    $stmt->execute();
 $textocat = "en la categoría";
    while($result=$stmt->fetch()){
    //select column by key and use
    $nombre = $result['nombre'];
	$resutlss=$result['cadena'];
	if ($count > 0){
	$categoria = $categoria." y ".$result['categoria'];
	$textocat = "en las categorías";
	}else
	$categoria=$result['categoria'];
	
	if ($count == 0){
	if($result['cadena'] =="xyz"){
	 for($i=0;$i<=5; $i++)
  {
  $str = rand();
    $resutlss.= base64_encode($str); 
  }
  $resutlss=$resutlss.base64_encode($referencia);
  
  $stmt2 = $conn->prepare("UPDATE `participantes` SET cadena='$resutlss' WHERE referencia = '".$result['referencia']."' ");
    $stmt2->execute();
	}
	}
	$count ++;
	}

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

if($nombre =="")
{
	$message = "wrong answer";
sleep(5);
	/* Redirect browser */
header("Location: http://critmxli.itmexicali.edu.mx/"); 
exit();
}
else{
$html = "<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
<style>
  @page { margin: 0in; }
  body {
    font-family: Denk One, sans-serif;
    background-image: url(http://critmxli.itmexicali.edu.mx/fondoxx.jpg);
    background-position: top left;
    background-repeat: no-repeat;
    background-size: 100%; 
    width:100%;
    height:100%;
	text-align:center;
	font-family: 'Montserrat', sans-serif;
	color:#363435;
  }
  
  .signature {
    margin-top: 4em;
    text-align: right;
  }
</style>

</head>

<body>
<br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/>
  <br/><br/><br/><br/>
   <br/><br/>
  <br/><br/>
  <br/><br/> 
 
<div style='font-size:36px; font-weight:bold;color:#363435;'>$nombre</div><br/>
<br/> 
  <div style='font-size:20px; font-weight:bold; margin-top:5px;color:#363435;'>$textocat $categoria,</div><br/>
 

   
  <br/><br/>
  <br/><br/>  <br/><br/> <br/>  <br/>   
 <div style='float:left; width:100%'>
 <img style='float: left;margin-top:45px;width:100px;height:100px;' src='https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=$resutlss&choe=UTF-8'/>
 <p style='word-wrap: break-word;font-size:8pt;margin-left:135px; align=left'>
   <br/><br/><br/><br/><br/><br/> </p> 


</div>
</body>
</html>";


$filename = "eCertificate";


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf = new Dompdf(array('enable_remote' => true));

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename,array("Attachment"=>0));

//echo $html;
}
}
else
{
	/* Redirect browser */
header("Location: http://critmxli.itmexicali.edu.mx/"); 
exit();

}
