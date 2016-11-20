<?php namespace Controllers;
use Models\DAOUsers as usuarios;
    /**
     *
     */
    class UserController {

        private $Obj_DAOUsuarios;
        public function __construct(){
            $this->Obj_DAOUsuarios = new usuarios();
        }

        public function index(){
            $datos = $this->Obj_DAOUsuarios->listarUsuarios();
            return $datos;
        }

        public function signUp(){
            if ($_POST) {
                # code...
                $this->Obj_DAOUsuarios->set($_POST['identificacion'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['telefono'], $_POST['password']);

                /*print $this->Obj_DAOUsuarios->get("id");
                print $this->Obj_DAOUsuarios->get("nombre");
                print $this->Obj_DAOUsuarios->get("apellidos");
                print $this->Obj_DAOUsuarios->get("telefono");
                print $this->Obj_DAOUsuarios->get("email");*/
                $valida = $this->Obj_DAOUsuarios->registrarUsuarios();
                var_dump($valida);
                if (!$valida) {
                    # code...
                    echo "ocurrio un error";
                }else {
                    echo "<strong>Se ha registrado Correctamente ;)</strong>";
                }
            } else {
                print "Error en la insercion de los datos";
            }
        }

    }

$usuarios = new UserController();

?>
