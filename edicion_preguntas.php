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
                    <br><header>
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
                        <h1>Edicion de Preguntas</h1><br>
                        <div class="row">
                            <div class="col-md-4">
                                <h3 align="center">Pregunta y Repuesta</h3>
                                <p align="center">En esta seccion se registran la pregunta y la repuesta correcta</p><br>
                                <form action="registro_preguntas.php" method="post" name="formulario_registro">
                                <label for="">Pregunta</label><input type="text" name="pregunta" placeholder="" class="form-control">
                                <label for="">Respuesta</label><input type="text" name="respuesta" placeholder="" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <h3 align="center">Opciones de preguntas</h3>
                                <p align="center">En esta seccion se registran las opcion al igual que el orden aleatorio donde se publicara la repuesta correcta</p>
                                <label for="">opcion1</label>
                                <input type="text" name="opcion1" placeholder="" class="form-control">
                                <label for="">opcion2</label>
                                <input type="text" name="opcion2" placeholder="" class="form-control">
                                <label for="">opcion3</label>
                                <input type="text" name="opcion3" placeholder="" class="form-control">
                                <label for="">opcion4</label>
                                <input type="text" name="opcion4" placeholder="" class="form-control">
                            </div>
                        <div class="col-md-4">
                            <h3 align="center">Categoria y Ponderacion</h3>
                            <p align="center">En esta seccion se registran la categoria de la pregunta y la ponderacion de cada repuesta correcta</p>
                            <label for="">Categoria</label>
                            <input type="text" name="categoria" placeholder="" class="form-control">
                            <label for="">Ponderacion</label>
                            <input type="text" name="ponderacion" placeholder="" class="form-control">
                            <br><input type="submit" class="btn btn-primary" value="Proceder">
                            <a href="menu-administrador.php" class="btn btn-default" style="margin-left:2%">Volver</a><br><br>
                            </form>
                        </div>
                    </div><br><br><br>
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