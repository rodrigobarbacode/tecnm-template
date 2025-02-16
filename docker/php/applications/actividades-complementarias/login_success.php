
<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start(); 

if(isset($_SESSION['myusername']) == 1 ){
$_SESSION['myusername'] = $_SESSION['myusername'];
echo($_SESSION['myusername']);
if($_SESSION['nivel'] == 1 ){
header("location:lista_alumnos.php");
}
else if($_SESSION['nivel'] == 2 ){
//header("location:mi_registro.php");
header("location:lista_alumnos2.php");
}

}
else
{
header("location:index.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>