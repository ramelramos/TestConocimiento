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
              <img alt="Brand" src="../img/Person-Male-Light-icon.png" width="20" height="20"> 
          </a>
                                  
        <a href="#" class="navbar-brand"><?=$_SESSION["user"];?></a> 
                       
                      </div>
                      
                      <div class="collapse navbar-collapse" id="navbar1">
                         <ul class="nav navbar-nav navbar-right">
                         
                            <li><a href="../salir.php">Salir</a></li>
                        
                         
                  
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
$user=$_SESSION["user"];
$query1= "SELECT estatus_nivel FROM participante WHERE user = '$user'";
$resultado1 = mysql_query($query1,$con);
$row1 =  mysql_fetch_assoc ($resultado1);
$actual = $row1['estatus_nivel'];

?>

<?php

require_once("../conexion.php");
$id_pregunta=$actual;
$query= "SELECT pregunta,respuesta,opcion1,opcion2,opcion3,opcion4,categoria,ponderacion FROM preguntas WHERE id_pregunta = '$id_pregunta'";
$resultado = mysql_query($query,$con);
if(mysql_num_rows($resultado) == 0) {
	
	echo "<h1>VER RESULTADOS</h1>";
	echo "<a href='resultado.php' class='btn btn-success'>Resultados</a>";
	
	
	}
	
	else {
$row =  mysql_fetch_assoc ($resultado);
$opcion1 = $row['opcion1'];
$opcion2 = $row['opcion2'];
$opcion3 = $row['opcion3'];
$opcion4 = $row['opcion4'];
?>
 
<h1><?php echo $row['pregunta']; ?> </h1>
<form action="test-action.php" method="post" name="formulario_preguntas">
<br>
<input type="radio" value="<?php echo $opcion1;?>" name="opcion" style="margin-left:30px"><label for=""><h3><?php echo $opcion1; ?></h3></label>
<input type="radio" value="<?php echo $opcion2;?>" name="opcion" style="margin-left:30px"><label for=""><h3><?php echo $opcion2; ?></h3></label>
<input type="radio" value="<?php echo $opcion3;?>" name="opcion" style="margin-left:30px"><label for=""><h3><?php echo $opcion3; ?></h3></label>
<input type="radio" value="<?php echo $opcion4;?>" name="opcion" style="margin-left:30px"><label for=""><h3><?php echo $opcion4; ?></h3></label><br>
<input type="submit" value="Continuar" class="btn btn-primary">
 <br><br>
</form>
<?php $rs = mysql_query("SELECT MAX(id_pregunta) AS id_pregunta FROM preguntas");
if ($busca = mysql_fetch_row($rs)){
	
	$id = trim($busca[0]);
	
	}
 ?>
<h1><?php echo "$id_pregunta / $id";} ?><a href="../menu.php" style="margin-left:10px;" class="btn btn-danger btn-xs">Volver Al Menu</a></h1><br>

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