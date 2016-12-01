<html>
<head>
    <meta charset="utf-8">
    <title>Proyecto</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/estile.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Proyecto</h1>
            </div>
        </div>
        </div>

        <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-8 caja col-center">
                <form action="<?php echo URL; ?>User/acceder" method="post">
                    <legend>Inicia Sesion</legend>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="" placeholder="Usuario" name="user">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                             <input type="password" class="form-control" id="" placeholder="Contraseña" name="pass">
                        </div>

                    </div>

                    <button type="submit" name="button" class="btn btn-primary">Entrar</button>
                    <a href="<?php echo URL; ?>User/signup" class="btn btn-primary">Registrar</a>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo URL; ?>Views/Template/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo URL; ?>Views/Template/js/bootstrap.min.js"></script>
</body>
</html>
