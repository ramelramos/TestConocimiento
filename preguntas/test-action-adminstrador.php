<?php 
session_start();
if ($_SESSION["user"]) 
{
	
?>
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
$consulta= "SELECT id_historial, ponderacion, progreso FROM historial WHERE user = '$user' and fecha ='$fecha' ";
$res = mysql_query($consulta,$con);
$rw =  mysql_fetch_assoc ($res);
$id_historial = $rw['id_historial'];
$session="completo";
	
	$sql = "UPDATE historial SET progreso = $progreso, session = '$session', fecha = '$fecha' WHERE id_historial ='$id_historial'";
mysql_query($sql,$con);

	echo "<meta http-equiv='refresh' content='1;url=../menu.php'>";
	
	}
else {
$row2 =  mysql_fetch_assoc ($resultado2);
$respuesta = $row2['respuesta']; 
$ponderacion_consulta = $row2['ponderacion']; 
$opcion = $_POST['opcion'];
////contador para incrementar pregunta////
$contador = $actual +1;
/////procedimientos//////

if ($opcion == $respuesta){
	

$ponderacion = $ponderacion_consulta;	
////actualizar estatus de pregunta////
$sql = "UPDATE participante SET estatus_nivel ='$contador' WHERE user ='$user'";
mysql_query($sql,$con);
////////registro del historial//////
if($actual == 1){
	
$progreso = $actual;
$fecha = date("d-m-Y");
$session = "incompleto";
$sql2 = "INSERT INTO historial (user,ponderacion,progreso,session,fecha) VALUES ('$user','$ponderacion','$progreso','$session', '$fecha')";
mysql_query($sql2,$con);
header("location:correcto.php");

 	
 
	}
	
else if ($actual> 1) {
$user=$_SESSION["user"];
$fecha = date("d-m-Y");	
$session="incompleto";
$consulta= "SELECT id_historial, ponderacion FROM historial WHERE user = '$user' and session ='$session' ";
$res = mysql_query($consulta,$con);
$rw =  mysql_fetch_assoc ($res);
$id_historial = $rw['id_historial'];
$ponderacion_historial = $rw['ponderacion']; 
$ponderacion = $ponderacion_consulta + $ponderacion_historial;
	
	$sql = "UPDATE historial SET ponderacion = '$ponderacion', progreso ='$progreso', fecha = '$fecha' WHERE id_historial ='$id_historial'";
mysql_query($sql,$con);
 header("location:correcto.php");

	
	}	


	


////insertar registro de historial y ponderacion////


	
	}
///repuesta incorrecta//////
	
	else if ($opcion != $respuesta) {
$ponderacion = 0;	
////actualizar estatus de pregunta////
$sql = "UPDATE participante SET estatus_nivel ='$contador' WHERE user ='$user'";
mysql_query($sql,$con);
////////registro del historial//////
if($actual == 1){
	
$progreso = $actual;
$fecha = date("d-m-Y");
$session = "incompleto";
$sql2 = "INSERT INTO historial (user,ponderacion,progreso,session,fecha) VALUES ('$user','$ponderacion','$progreso','$session', '$fecha')";
mysql_query($sql2,$con);
header("location:incorrecto.php");
	
	}
	
else if ($actual> 1) {
$user=$_SESSION["user"];
$fecha = date("d-m-Y");	
$session="incompleto";
$consulta= "SELECT id_historial, ponderacion FROM historial WHERE user = '$user' and session ='$session' ";
$res = mysql_query($consulta,$con);
$rw =  mysql_fetch_assoc ($res);
$id_historial = $rw['id_historial'];
$ponderacion_historial = $rw['ponderacion']; 
$ponderacion = 0 + $ponderacion_historial;
	
	$sql = "UPDATE historial SET ponderacion = '$ponderacion', progreso ='$progreso', fecha = '$fecha' WHERE id_historial ='$id_historial'";
mysql_query($sql,$con);
header("location:incorrecto.php");

	
	}	


	


////insertar registro de historial y ponderacion////


	}
		
		}

?>

 <?php
}else
{
	 header("location:error_session.php");
}
?>