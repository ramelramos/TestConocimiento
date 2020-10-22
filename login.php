<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
            <title>Test Conocimiento</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="estilos.css">
    </head>
    <body class="fondo">
        <div class="container-fluid cuerpo" style="margin-top:10%;">
            <div class="col-md-12" align="center">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h1>Ingresar</h1><br>
                        <form action="ingresar.php" method="post" name="formulario_ingresar">
                            <label for="">Usuario</label>
                            <input type="text" name="user" placeholder="Ej. Unefa001" class="form-control">
                            <label for="">Contraseña</label>
                            <input type="password" name="pass" placeholder="********" class="form-control">
                            <br> 
                            <input type="submit" class="btn btn-primary" value="Ingresar">
                            <a href="index.php" class="btn btn-default" style="margin-left:2%">Volver</a><br><br>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>  
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>