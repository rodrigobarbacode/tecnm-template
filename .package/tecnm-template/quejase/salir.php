<?php
   session_start();
   unset($_SESSION["login_user"]);
   //unset($_SESSION["password"]);
   
   //echo 'Sesion cerrarda';
   header('Refresh: 0; URL = login.php');
?>