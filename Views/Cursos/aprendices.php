<?php $cursos = $proyectos->listarCursos();
$usuarios = $users->listarUsuarios();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Proyecto</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/cursos.css">
    <link rel="stylesheet" href="<?php echo URL; ?>Views/Template/css/datatables.min.css"/>
</head>
<body onload="table()">
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



<!-- Vertical menu -->
<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
		<div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
      <ul class="nav navbar-nav" id="sidenav01">
        <li>
          <a href="<?php echo URL . "Cursos/" ?>" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
          <h4>
          Panel
          <br>
          </h4>
          </a>

        </li>
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-user"></span> Gestionar Aprendices <span class="caret pull"></span>
          </a>
          <div class="collapse" id="toggleDemo" style="height: 0px;">
            <ul class="nav nav-list">
              <li class="active"><a href="#lorem">Asignar aprendices</a></li>
              <li><a href="#">Crear Grupos</a></li>
            </ul>
          </div>
        </li>
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>
	<div class="col-sm-9 col-md-10 affix-content">
		<div class="container">

            <h1 class="text-center">Asignar Aprendices</h1>
            <br>
            <a id="bc" data-toggle="modal" data-target="#usuarioModal" class="btn btn-default pull-right">Buscar Aprendices</a>
            </p><br><br>
            <!--<a href="#" class="btn btn-default" id="nuevo">Nuevo</a>-->
            <table class="table table-hover" id="tabla">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
            </table>

            <a href="#" class="btn btn-success">Guardar</a>
		</div>
	</div>
</div>

<!-- Ventana modal Sbuscar usuario-->
<div class="modal fade" id="usuarioModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buscar Aprendices</h4>
      </div>
      <div class="modal-body">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-4">

                       <table id="tablaModal" class="table table-hover">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Nombre</th>
                                   <th>Apellidos</th>
                                   <th>Accion</th>
                               </tr>
                           </thead>
                       </table>
                </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="<?php echo URL; ?>Views/Template/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo URL; ?>Views/Template/js/jquery.dataTables.min.js"></script>
<script src="<?php echo URL; ?>Views/Template/js/dataTables.bootstrap.js"></script>
<!--botones DataTables-->
<script src="<?php echo URL; ?>Views/Template/js/dataTables.buttons.min.js"></script>
<script src="<?php echo URL; ?>Views/Template/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo URL; ?>Views/Template/js/asigAprendices.js"></script>
<!--<script src="<?php echo URL; ?>Views/Template/js/gCursos.js"></script>-->
<script src="<?php echo URL; ?>Views/Template/js/bootstrap.min.js"></script>
</body>
</html>
