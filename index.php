<!DOCTYPE html>
<html>
<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', "http://localhost/proyecto_php/");
    require_once "Config/Autoload.php";
    Config\Autoload::run();
    //require_once "Views/TemplateAdmin.php";
    require_once "Views/Template.php";
    Config\Enrutador::run(new Config\Request());
    //new Config\Request();
    /*$datos =new Models\DAOUsers();
    $resultado = $datos->listarUsuarios();
    foreach ($resultado as $key) {
        # code...
        print_r($key);
    }*/

 ?>
