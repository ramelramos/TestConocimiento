<?php
session_start();
//require_once("ingresar.php");
 unset($_SESSION["user"]);
  session_destroy();
  //devuelvo al usuario al formulario
  header("Location: index.php");
?>