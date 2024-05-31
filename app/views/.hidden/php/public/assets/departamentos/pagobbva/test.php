<div class="col-md-6">
<?php
// Llamando a la libreria PHPQRCODE
include('phpqrcode/qrlib.php'); 

// Ingresamos el contenido de nuestro Código QR
$contenido = "https://www.baulphp.com/";

// Exportamos una imagen llamado resultado.png que contendra el valor de la avriable $content
QRcode::png($contenido,"resultado.png",QR_ECLEVEL_L,10,2);

// Impresión de la imagen en el navegador listo para usarla
echo "<div><img src='resultado.png'/></div>";
?>
</div>