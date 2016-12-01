<?php namespace Controllers;
use Models\DAOCursos as cursos;
use Models\DAOUsers as usuarios;
use Models\DAOISesion as sesion;
    /**
     *
     */
    class CursosController {

        private $Obj_DAOCursos, $Obj_DAOUsuarios;
        public function __construct(){
            $this->Obj_DAOUsuarios = new usuarios();
            $this->Obj_DAOCursos = new cursos();
        }

        public function index(){

        }

        function buscarUsuarios(){
            //$boton = $_POST['agregar'];
            //if ($boton === 'agregar') {
            $datos = $this->Obj_DAOUsuarios->buscarUsuarios();
            while ($row = mysqli_fetch_assoc($datos)) {
                $arreglo["data"][] =  array_map("utf8_encode", $row);
            }
            echo json_encode($arreglo);
            //}

        }

        public function aprendices(){

        }

        public function cursos(){
            $user= $_SESSION['usuario'];
            //print $user;
            $datos = $this->Obj_DAOCursos->buscarProgramas($user);
            return $datos;
        }

        public function listarCursos(){
            $user= $_SESSION['usuario'];
            //print $user;
            $datos = $this->Obj_DAOCursos->buscarProgramas($user);
            return $datos;
        }

        public function listarApredices($curso){
            $datos = $this->Obj_DAOCursos->buscarApredices($curso);
            return $datos;
        }

        public function asignarApr($id){
            $valida = $this->Obj_DAOCursos->asignarAprendices($id,'960032', '1', '5');
            return $valida;
        }

}

$proyectos = new CursosController();
$sesion = new sesion();
$users = new usuarios();
?>
