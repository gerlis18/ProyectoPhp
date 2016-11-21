<?php namespace Models;
session_start();
    /**
     * Clase para verificar usuario e iniciar sesion
     */
    class DAOISesion {

        private $dt;

        function __construct() {
            # code...
            $this->con = new Conexion();
        }

        public function acceder($user, $pass){
            $sql = "call iniciar_sesion($user, $pass)";
            $datos = $this->con->consultaRetorno($sql);
            $this->dt = $datos;
            //print_r ($this->dt);
            $numrows = mysqli_num_rows($datos);
            if ($numrows != 0) {
                # code...
                while ($row=mysqli_fetch_assoc($datos)) {
                    # code...
                    $dbusername = $row['idusuarios'];
                    $dbpassword = $row['contraseña'];
                    $_SESSION['nombre'] = $row['nombreusuarios'] . " " . $row['apellidosusuarios'];
                    $_SESSION['usuario'] = $user;
                    $_SESSION['pass'] = $pass;
                    if ($dbusername = $user && $dbpassword = $pass) {
                        # code...
                        return true;
                    }else{
                        echo "verifique usuario o contraseña";
                        return false;
                    }
                }
            }
        }

        public function getNombre(){

        }

    }


?>
