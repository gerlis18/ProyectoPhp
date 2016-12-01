<?php namespace Controllers;
use Models\DAOISesion as isesion;
use Controllers\CursosController as cursos;
    /**
     *
     */
    class DashboardController {

        private $sesion;
        public function __construct(){
            $this->sesion = new isesion();

        }
        public function index(){
            if (isset($_SESSION["usuario"]) && isset($_SESSION["pass"])) {
                # code...
            } else {
                $url = URL . "User/";
                header("Location: $url");
            }
        }

        public function cerrarSesion(){
            session_destroy();
            $url = URL . "User/";
            header("Location: $url");
        }



}
$cursos = new cursos();
?>
