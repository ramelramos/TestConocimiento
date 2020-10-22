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
            <div class="container-fluid cuerpo" style="margin-top:3%;">
                <div class="col-md-12" align="center">
                    <div class="row">
                        <div class="col-md-4" align="right"><br>
                            <img src="img/Person-Male-Light-icon.png" alt="" width="200"><br>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <h1 style="font-size:50px" align="left"><?=$_SESSION["user"];?></h1>
                            <?php 
                                require_once("conexion.php");
                                $user=$_SESSION["user"];
                                $query1= "SELECT correo_participante FROM participante WHERE user = '$user'";
                                $resultado1 = mysql_query($query1,$con);
                                $row1 =  mysql_fetch_assoc ($resultado1);
                                $correo = $row1['correo_participante'];
                                echo "<p align='left'>".$correo."</p>";
                            ?>
                        </div>
                        <div class="col-md-4"><br><br><br>
                            <a href="menu.php" style="margin-left:4px;" class="btn btn-danger btn-xs">Volver</a>
                        </div>
                        <div class="col-md-8">
                        <?php 
                            $user=$_SESSION["user"];
                            $where ="where user like '".$user."'";
                            $historial= "SELECT * FROM historial $where";
                            $res = mysql_query($historial,$con);

                            if(mysql_num_rows($res)== 0){ 
                                echo "<h1 align='center'>SIN REGISTROS</h1>";   
                                }
                        ?>
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Historial</div> 
                                <table class="table table-condensed " style="color:black">
                                    <tr>
                                        <th>USUARIO</th>
                                        <th>PONDERACION</th>
                                        <th>TOTAL DE PREGUNTAS</th>
                                        <th>NIVEL</th>
                                        <th>FECHA</th>
                                    </tr>
                                    <?php 
                                        while ($registroHistorial =  mysql_fetch_assoc ($res)){                                     
                                            echo 
                                                '<tr>
                                                    <td>'.$registroHistorial['user'].'</td>
                                                    <td>'.$registroHistorial['ponderacion'].'</td>
                                                    <td>'.$registroHistorial['progreso'].'</td>
                                                    <td>'.$registroHistorial['session'].'</td>
                                                    <td>'.$registroHistorial['fecha'].'</td>
                                                <tr>';
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
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