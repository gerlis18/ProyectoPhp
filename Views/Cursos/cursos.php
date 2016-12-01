<?php $cursos = $proyectos->listarCursos();
        //$aprendices = $proyectos->listarApredices();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Proyecto</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/dashboard.css">
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
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
        <li class="actives"><a href="<?php echo URL; ?>Dashboard/">Inicio</a></li>
        <li class="dropdown">
            <a href="#" class="dropwdon-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" arai-expanded="false" >Notas
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Registrar Notas</a></li>
                </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropwdon-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" arai-expanded="false" >Proyectos
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Registrar Grupo</a></li>
                </ul>
        </li>
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


<!-- Registrar grupos de proyecto -->
<h1 class="text-center">Registrar grupos de proyecto</h1>
<div class="container">
    <legend>Programas y Cursos</legend>
    <form class="" action="" method="post" name="programas">
    <div class="row">
        <div class="col-md-6">
            <div class="form-horizontal">
                    <label for="">Programa</label>
                    <select class="form-control" id="programas" name="programas">
                        <option value="programa_id" selected disabled>SELECCIONE</option>

                        <?php while ($row = mysqli_fetch_array($datos)) {
                            $nombre = $row['programa_nombre']; ?>
                        <option value="programa_id"><?php echo  $nombre?></option>
                        <?php } ?>
                    </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-horizontal">
                <label for="">Curso</label>
                <select class="form-control" id="cursos" name="cursos" disabled>
                    <option value="programa_id" selected disabled>SELECCIONE</option>
                    <?php while ($row = mysqli_fetch_array($cursos)) { ?>
                    <option><?php echo $row['cursos_cursos_id'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        </form>
    </div><br><br>
    <legend>Aprendices</legend>
    <form class="" action="" method="post">
        <div class="row">
            <div class="col-md-2">
                <h4>Aprendiz 1</h4>
            </div>
            <div class="col-md-3">
                <select class="form-control" name="">
                    <option selected disabled>SELECCIONE</option>
                    <?php while ($row = mysqli_fetch_array($aprendices)) { ?>
                        <option><?php echo [''] ?></option>
                        <?php } ?>
                </select>
            </div>
        </div>
        <br><br>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-horizontal">
                        <label for="nombre">Identificacion</label>
                            <input type="text" class="form-control" id="identificacion" name="identificacion" disabled>
                    </div>
                </div>
            <div class="col-md-3">
                <div class="form-horizontal">
                    <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" disabled>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-horizontal">
                    <label for="nombre">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" disabled>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>Views/Template/js/bootstrap.min.js"></script>
</body>
</html>
