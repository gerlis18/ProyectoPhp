<head>
    <meta charset="utf-8">
    <title>Proyecto</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Inicio</a></li>
        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?php
                $usuario = $_SESSION['nombre'];
                echo $usuario;
              ?>
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" data-toggle="modal" data-target="#perfilModal" >Mi Perfil</a></li>
            <li><a href="#">Mi Curso</a></li>
            <li><a href="#">Configuracion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo URL; ?>Dashboard/cerrarsesion">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<!-- Ventana modal Mi perfil-->
<div class="modal fade" id="perfilModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Mi Perfil</h4>
        <h4 class="modal-title"><?php echo $_SESSION['nombre']; ?></h4>
      </div>
      <div class="modal-body">
          <div class="container">
              <div class="row">
                  <div class="col-sm-4 col-md-6 col-xs-8">
          <form action="" method="POST">
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

              
          </form>
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
