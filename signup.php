<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Proyecto</title>
        <link rel="stylesheet" href="Views/Template/css/bootstrap.min.css">
        <link rel="stylesheet" href="Views/Template/css/estilos.css">
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
                    <form action="index.html" method="post">
                        <legend>Registrate</legend>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ej: Juan">
                        </div>


                        <div class="form-group">
                                <label for="apellido">Apellido</label>
                                 <input type="text" class="form-control" id="apellido" placeholder="Ej: Carmona">
                        </div>

                        <div class="form-group">
                                <label for="identificacion">Identificacion</label>
                                 <input type="number" class="form-control" id="identificacion" placeholder="Ej: 10509696">
                        </div>

                        <div class="form-group">
                                <label for="telefono">Telefono</label>
                                 <input type="number" class="form-control" id="telefono" placeholder="Ej: 3008516497">
                        </div>

                        <div class="form-group">
                                <label for="email">E-mail</label>
                                 <input type="email" class="form-control" id="email" placeholder="Ej: ejemplo@ejemplo.com">
                        </div>

                        <div class="form-group">
                                <label for="password">Contraseña</label>
                                 <input type="password" class="form-control" id="password" placeholder="Contraseña">
                        </div>

                        <a href="index.php">Volver</a>
                        <a href="#" class="btn btn-primary pull-right">Registrar</a>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
