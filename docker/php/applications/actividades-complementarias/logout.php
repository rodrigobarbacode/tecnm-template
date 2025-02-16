<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- Put this code in first line of web page. -->
<?php 
session_start();
session_destroy();
header("location:index.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
Gracias por contestar.
</body>
</html>
