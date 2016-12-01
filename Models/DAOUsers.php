<?php namespace Models;

    /**
     * Clase gestionadora de usuarios
     */
    class DAOUsers {

        private $id;
        private $contraseña;
        private $nombre;
        private $apellidos;
        private $email;
        private $telefono;

        public function __construct() {
            $this->con = new Conexion();
        }

        public function set($id, $nombre, $apellido, $email, $telefono, $contraseña){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellido;
            $this->telefono = $telefono;
            $this->contraseña = $contraseña;
            $this->email = $email;
        }

        public function get($atributo){
            $atr = $this->atributo = $atributo;
            return print "{'$this' . '->' . $atributo}";
        }

        public function listarUsuarios(){
            $sql = "call listar_usuarios()";
            $datos = $this->con->consultaRetorno($sql);
            return $datos;
        }

        public function buscarUsuarios(){
            $sql = "call listar_usuarios()";
            //$this->con->set_charset("utf8");
            $datos = $this->con->consultaRetorno($sql);

            return $datos;
        }


        public function registrarUsuarios(){
            try{
                //$datos = fe
            $sql = "call registrar_usuarios($this->id, '{$this->nombre}', '{$this->apellidos}', '{$this->email}', $this->telefono, '{$this->contraseña}')";
            $valida = $this->con->consulta($sql);
            //echo mysqli_error($this->con);
            print_r($valida);
            return $valida;
        }catch(Exception $e){
                echo "Error en base de datos" . $e->getMessage();
            }
        }

        public function eliminarUsuarios(){
            $sql = "call eliminar_usuarios('{$this->id}')";
            $this->con->consulta($sql);
        }

        public function modificarUsuarios(){
            $sql = "call modificar_usuarios('{$this->id}', '{$this->nombre}', '{$apellidos}', '{$this->email}', '{$this->telefono}', '{$contraseña}')";
            $this->con->consulta($sql);
        }
    }


 ?>
