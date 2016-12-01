<?php namespace Models;

    /**
     * Clase para verificar usuario e iniciar sesion
     */
    class DAOCursos {


        function __construct() {
            # code...
            $this->con = new Conexion();
        }

        public function buscarProgramas($usuario){
            $sql = "call buscar_programas_cursos($usuario)";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        public function buscarApredices($curso){
            $sql = "call buscar_aprendices($curso)";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        public function asignarAprendices($iduser, $idcurso, $idprograma, $rol){
            $sql = "call asignar_aprendices_cursos($iduser, $idcurso, $idprograma, $rol)";
            $valida = $this->con->consulta($sql);
            return $valida;
        }

    }


?>
