<?php
session_start();

if(isset($_SESSION['nombre']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kardex</title>
    <link rel="stylesheet" href="../librerias/info.css">
    <?php require_once "menu.php";?>
</head>
<body>
    <div class="tabla">
        <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                <h1>Historial de Cursos</h1>
                </div>
            <div class="form-content">
            <div id="tablaCategoriaLoad"></div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#tablaCategoriaLoad').load("cursos/tablaKardex.php");
});
</script>
<?php
}
else
{
    header("location: ../index.php");
}
?>