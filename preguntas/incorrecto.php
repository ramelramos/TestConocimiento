<?php 
session_start();
if ($_SESSION["user"]) 
{
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="1;url=test.php">
<title>Test Conocimiento</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../estilos.css">
</head>

<body class="fondo">


<div class="container-fluid cuerpo" style="margin-top:15%;">


<div class="row">

<div class="col-md-12" align="center">
<br><br>
<h1>INCORRECTO</h1>
<br><br>
</div>
<script src="../js/jquery.min.js"></script>  
<script src="../js/bootstrap.min.js"></script>
</body>
 <?php
}else
{
	 header("location:error_session.php");
}
?>  
</html>