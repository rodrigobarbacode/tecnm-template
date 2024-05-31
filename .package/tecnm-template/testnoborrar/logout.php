<?php
 session_start();
 if (isset($_SESSION['usuario']) and $_SESSION['usuario']) {
    $_SESSION['usuario'] = false;
    unset($_SESSION['usuario']);
 }
 header('Location: index.php');
 exit;
?>