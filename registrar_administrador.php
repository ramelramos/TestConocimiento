<?php 
//* error_reporting(0);
require_once("conexion.php");

$sql1 = "SELECT user FROM participante WHERE user ='".$_POST["user"]."'";
$res = mysql_query($sql1,$con);
if(!mysql_num_rows($res) == 0) {
	
	
	echo "<script>
	alert('Nombre de usuario ya existe');
	window.location ='registro_cuenta_administrador.php';
	</script>";
	
	}

else {	
$user = $_POST["user"];
$pass = $_POST["pass"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$estatus = "1";
$nivel_usuario = "2";

$sql = "INSERT INTO participante (user,pass,nombre_participante,apellido_participante,correo_participante,estatus_nivel) VALUES ('$user','$pass','$nombre','$apellido','$correo','$estatus')";

mysql_query($sql,$con);

if (!$sql == true){
	
	echo "<script>
	alert('Error en los datos');
	window.location ='registro_cuenta_administrador.php';
	</script>";
	
	}
else {
	
	$sql_login = "INSERT INTO login (nivel_usu,user,pass) VALUES ('$nivel_usuario','$user','$pass')";

mysql_query($sql_login,$con);
	
	echo "<script>
	alert('Felicitaciones ".$_POST["user"]." ha sido registrado exitosamente!');
	window.location ='registro_cuenta_administrador.php';
	</script>";
	
	
	
	
	}

}
?>

