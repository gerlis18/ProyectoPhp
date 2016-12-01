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
                    <form action="" method="POST">
                        <legend>Registrate</legend>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan">
                        </div>


                        <div class="form-group">
                                <label for="apellido">Apellido</label>
                                 <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej: Carmona">
                        </div>

                        <div class="form-group">
                                <label for="identificacion">Identificacion</label>
                                 <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="Ej: 10509696">
                        </div>

                        <div class="form-group">
                                <label for="telefono">Telefono</label>
                                 <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ej: 3008516497">
                        </div>

                        <div class="form-group">
                                <label for="email">E-mail</label>
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Ej: ejemplo@ejemplo.com">
                        </div>

                        <div class="form-group">
                                <label for="password">Contraseña</label>
                                 <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>

                        <a href="<?php echo URL; ?>User/index">Volver</a>
                        <!--<a href="<?php echo URL; ?>" class="btn btn-primary pull-right">Registrar</a>-->
                        <input type="submit" name="registrar" value="Registrar" class="btn btn-primary pull-right">
                    </form>
                </div>
            </div>
        </div>

        <script src="<?php echo URL; ?>Views/Template/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo URL; ?>Views/Template/js/bootstrap.min.js"></script>
    </body>
</html>
