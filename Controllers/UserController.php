<?php namespace Controllers;
use Models\DAOUsers as usuarios;
use Models\DAOISesion as iniciarSesion;
    /**
     *
     */
    class UserController {

        private $Obj_DAOUsuarios;
        public function __construct(){
            $this->Obj_DAOUsuarios = new usuarios();
            $this->Obj_DAOISesion = new iniciarSesion();
        }

        public function index(){
            if (isset($_SESSION['usuario']) && isset($_SESSION['pass'])) {
                # code...
                $url = URL . "Dashboard/";
                header("Location: $url");
            }
        }

        public function acceder(){
            if(isset($_POST['user']) && !empty($_POST['user']) &&
                isset($_POST['pass']) && !empty($_POST['pass'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $datos = $this->Obj_DAOISesion->acceder($user, $pass);
                if ($datos == true) {
                    # code...
                    //$this->Obj_DAOISesion->getNombre();
                    echo "usuario validado correctamente";
                    $url = URL . "Dashboard/";
                    header("Location: $url");
                } else {
                    echo "verifique usuario o contraseña y verifique que tenga asignado un rol en el sistema <br>";
                }
            }else {
                echo "<strong>Rellene campos vacios</strong>";
            }
        }

        public function signUp(){
            if ($_POST) {
 
                if (isset($_POST['identificacion']) && !empty($_POST['identificacion']) &&
                    isset($_POST['nombre']) && !empty($_POST['nombre']) &&
                    isset($_POST['apellido']) && !empty($_POST['apellido']) &&
                    isset($_POST['email']) && !empty($_POST['email']) &&
                    isset($_POST['telefono']) && !empty($_POST['telefono']) &&
                    isset($_POST['password']) && !empty($_POST['password'])) {
                    
                    $this->Obj_DAOUsuarios->set($_POST['identificacion'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['password']);

                    $valida = $this->Obj_DAOUsuarios->registrarUsuarios();
                    //var_dump($valida);
                    if (!$valida) {
                        echo "ocurrio un error";
                    }else {
                        echo "<strong>Se ha registrado Correctamente ;)</strong>";
                    }
                } else {
                    print "Rellene campos";
                }
            }
        }

    }

$usuarios = new UserController();

?>
