<?php

if (isset($_POST['referencia'])) {  
$html = "<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
<style>
  @page { margin: 0in; }
  body {
    font-family: Denk One, sans-serif;
    background-image: url(http://www.itmexicali.edu.mx/escala/fondox.jpg);
    background-position: top left;
    background-repeat: no-repeat;
    background-size: 100%; 
    width:100%;
    height:100%;
	text-align:center;
	font-family: 'Montserrat', sans-serif;
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
  <br/><br/>
  <br/><br/>
 
<div style='font-size:36px; font-weight:bold;'>jose carlos sachez lopez hidalgo</div><br/>

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
 
 <div style='float:left'>
 <img src='https://chart.googleapis.com/chart?chs=100x100&cht=qr&chl=Hello%20world&choe=UTF-8'/>
 </div>
 
 

</div>
</body>
</html>";
$filename = "eCertificate";

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

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
}
else
{
	/* Redirect browser */
header("Location: http://www.congresoescala.com"); 
exit();

}
}