<?php namespace Config;

    /**
     *
     */
    class Enrutador {

        public static function run(Request $request){
            $controlador = $request->getControlador() . "Controller";
            $ruta = ROOT . "Controllers" . DS . $controlador . ".php";

            $metodo = $request->getMetodo();
            if ($metodo == "index.php") {
                # code...
                $metodo = "index";
            }/*else if($metodo == "signup.php"){
                $metodo = "signUp";
            }*/
            //print "<strong>$metodo<strong>";
            $argumento = $request->getArgumento();
            if (is_readable($ruta)) {
                # code...
                require_once $ruta;
                $mostrar = "Controllers\\" . $controlador;
                $controlador = new $mostrar;
                if (!isset($argumento)) {
                    # code...
                    call_user_func(array($controlador, $metodo));
                }else{
                    call_user_func_array(array($controlador, $metodo), $argumento);
                }
            }

            //cargar vista
            $ruta = "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
            if (is_readable($ruta)) {
                # code...
                //print $ruta;
                require_once $ruta;
            }else {
                print "no se encontro la ruta";
            }
        }

    }


 ?>
