<?php namespace Config;

    /**
     *
     */
    class Request {

        private $controlador;
        private $metodo;
        private $argumento;

        function __construct() {
            # code...
            if (isset($_GET['url'])) {
                # code...
                $ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
                $ruta = explode("/", $ruta);
                $ruta = array_filter($ruta);

                if ($ruta[0] == "index.php") {
                    # code...
                    $this->controlador = "User";
                }else {
                    $this->controlador = strtolower(array_shift($ruta));
                }

                $this->metodo = strtolower(array_shift($ruta));
                if (!$this->metodo) {
                    # code...
                    $this->metodo = "index";
                }
                $this->argumento = $ruta;
                print $this->metodo;
                print_r($ruta);
            } else {
                $this->controlador = "User";
                $this->metodo = "index";
            }
        }

        public function getControlador(){
            return $this->controlador;
        }

        public function getMetodo(){
            return $this->metodo;
        }

        public function getArgumento(){
            return $this->argumento;
        }
    }


 ?>
