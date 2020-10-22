<?php 
session_start();
if ($_SESSION["user"]) 
{
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test Conocimiento</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../estilos.css">
</head>

<body class="fondo">

<div class="container">
         <br>
          <header>
              <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#000000;">
                  <div class="container">
                      <div class="navbar-header">
         
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
                
          <a class="navbar-brand">
              <img alt="Brand" src="../img/Comics-War-Machine-icon.png" width="20" height="20"> 
          </a>
                                  
        <a href="#" class="navbar-brand"><?=$_SESSION["user"];?></a> 
                       
                      </div>
                      
                      <div class="collapse navbar-collapse" id="navbar1">
                      <ul class="nav navbar-nav">
                      <li><a href="test_administrador.php">Test</a></li>
                      <li><a href="historial_administrador.php">Historial</a></li>
                      <li><a href="registro_cuenta_administrador.php">Registro de cuenta</a></li>
                      <li><a href="edicion_preguntas.php">Edicion de Preguntas</a></li>
                      </ul>
                         <ul class="nav navbar-nav navbar-right">
                            <li><a href="salir.php">Salir</a></li>
                        
                         
                  
                         </ul>
                            
                                 
                      </div>
                  </div>
              </nav>
          </header>
      </div>

<div class="container-fluid cuerpo" style="margin-top:10%;">

<div class="col-md-12" align="center">
<div class="row">

<div class="col-md-12">

<?php

require_once("../conexion.php");


////vaariables/////
$user=$_SESSION["user"];
$query1= "SELECT estatus_nivel FROM participante WHERE user = '$user'";
$resultado1 = mysql_query($query1,$con);
$row1 =  mysql_fetch_assoc ($resultado1);
$actual = $row1['estatus_nivel'];

$query2= "SELECT respuesta,ponderacion FROM preguntas WHERE id_pregunta = '$actual'";
$resultado2 = mysql_query($query2,$con);
if(mysql_num_rows($resultado2) == 0) {
	$nivel="1";
	$sql = "UPDATE participante SET estatus_nivel ='$nivel' WHERE user ='$user'";
mysql_query($sql,$con);


$user=$_SESSION["user"];
$fecha = date("d-m-Y");
$progreso = $actual - 1;
$session ="incompleto";	
$consulta= "SELECT id_historial, ponderacion, progreso, session FROM historial WHERE user = '$user' and session ='$session' ";
$res = mysql_query($consulta,$con);
$rw =  mysql_fetch_assoc ($res);
$id_historial = $rw['id_historial'];
$ponderacion_imprimir = $rw['ponderacion'];
$progreso_imprimir = $rw['progreso'];
$session="completo";
	
	$sql = "UPDATE historial SET progreso = $progreso, session = '$session', fecha = '$fecha' WHERE id_historial ='$id_historial'";
mysql_query($sql,$con);

	
	
	}
	
	else {
	}
?>
 
<h1>Resultados Obtenidos</h1>
<br>
<h1>Ponderacion = <?php echo $ponderacion_imprimir?> | Total Preguntas = <?php echo $progreso ?> | Estatus = <?php echo $session ?></h1>

<a href="../menu-administrador.php" class="btn btn-default">Menu</a>
</div>


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