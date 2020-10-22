<?php 
//* error_reporting(0);
require_once("conexion.php");

$sql1 = "SELECT pregunta FROM preguntas WHERE pregunta ='".$_POST["pregunta"]."'";
$res = mysql_query($sql1,$con);
if(!mysql_num_rows($res) == 0) {
	
	
	echo "<script>
	alert('La pregunta ya existe');
	window.location ='edicion_preguntas.php';
	</script>";
	
	}

else {	
$pregunta = $_POST["pregunta"];
$respuesta = $_POST["respuesta"];
$opcion1 = $_POST["opcion1"];
$opcion2 = $_POST["opcion2"];
$opcion3 = $_POST["opcion3"];
$opcion4 = $_POST["opcion4"];
$categoria = $_POST["categoria"];
$ponderacion = $_POST["ponderacion"];

$sql = "INSERT INTO preguntas (pregunta,respuesta,opcion1,opcion2,opcion3,opcion4,categoria,ponderacion) VALUES ('$pregunta','$respuesta','$opcion1','$opcion2','$opcion3','$opcion4', '$categoria', '$ponderacion')";

mysql_query($sql,$con);

if (!$sql == true){
	
	echo "<script>
	alert('Error en los datos');
	window.location ='edicion_preguntas.php';
	</script>";
	
	}
else {
	
	
	echo "<script>
	alert('Preguntas ha sido registrada');
	window.location ='edicion_preguntas.php';
	</script>";
	
	
	
	
	}

}
?>