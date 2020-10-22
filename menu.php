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
                                <img alt="Brand" src="img/Person-Male-Light-icon.png" width="20" height="20"> 
                            </a>                         
                            <a href="#" class="navbar-brand"><?=$_SESSION["user"];?></a>   
                        </div>
                        <div class="collapse navbar-collapse" id="navbar1">
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
                        <h1>BIENVENIDO <?=$_SESSION["user"];?></h1><br>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <nav class="navbar navbar-inverse " style="background:none; border:none;">
                        <div class="container" align="center">   
                            <div class="collapse navbar-collapse" id="navbar1">
                                <ul class="nav navbar-nav navbar">
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href=""></a></li>
                                    <li><a href="preguntas/test.php">
                                    <img src="img/Test-paper-icon.png" alt="" width="200" style="" ><br> Test</a></li>
                                    <li><a href="historial.php"><img src="img/History-icon.png" alt="" width="200"><br> Historial</a></li>
                                    <li><a href="perfil.php"><img src="img/Person-Male-Light-icon.png" alt="" width="200"><br> Perfil</a></li>              
                                </ul>           
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
                <div class="col-md-3"></div>
        </div>
            <script src="js/jquery.min.js"></script>  
            <script src="js/bootstrap.min.js"></script>
    </body>
        <?php
            }else{
                header("location:error_session.php");
            }
        ?>  
</html>