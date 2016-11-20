
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
                    <legend>Inicia Sesion</legend>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" id="" placeholder="Usuario">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                             <input type="password" class="form-control" id="" placeholder="Contraseña">
                        </div>

                    </div>

                    <button type="submit" name="button" class="btn btn-primary">Entrar</button>
                    <a href="<?php echo URL; ?>User/signup" class="btn btn-primary">Registrar</a>
                </form>
            </div>
        </div>
    </div>
