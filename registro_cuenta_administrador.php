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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="estilos.css">
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
              <img alt="Brand" src="img/Comics-War-Machine-icon.png" width="20" height="20"> 
          </a>
                                  
        <a href="#" class="navbar-brand"><?=$_SESSION["user"];?></a> 
                       
                      </div>
                      
                      <div class="collapse navbar-collapse" id="navbar1">
                      <ul class="nav navbar-nav">
                      <li><a href="preguntas/test_administrador.php">Test</a></li>
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
<div class="col-md-4"></div>
<div class="col-md-4">

<h1>Registro</h1><br>
<form action="registrar_administrador.php" method="post" name="formulario_registro">
<label for="">Nombre de usuario</label><input type="text" name="user" placeholder="Ej. Unefa001" class="form-control">
<label for="">Contraseña</label><input type="password" name="pass" placeholder="********" class="form-control">
<label for="">Nombre</label><input type="text" name="nombre" placeholder="Pedro" class="form-control">
<label for="">Apellido</label><input type="text" name="apellido" placeholder="Perez" class="form-control">
<label for="">Correo</label><input type="email" name="correo" placeholder="example@gmail.com" class="form-control">
<br> <input type="submit" class="btn btn-success" value="Registrarse"><a href="menu-administrador.php" class="btn btn-default" style="margin-left:2%">Volver</a> <br><br>
</form>


</div>
<div class="col-md-4"></div>
</div>

</div>

</div>


<script src="js/jquery.min.js"></script>  
<script src="js/bootstrap.min.js"></script>
<?php }else
{
	 header("location:error_session.php");
}
?>
</body>
</html>