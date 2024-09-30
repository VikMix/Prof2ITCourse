<?php
//
//include_once "Controller/HomeController.php"; 
// когда много контроллеров - так как выше - некрасиво
// а вот как ниже - красиво

include_once ("ClassLoader.php");

ClassLoader::getInstance();

Application::getInstance()->init();


//$autoloader = new ClassLoader();
// new HomeController();

// А все, что ниже, для красоты ушло в новый класс Application
/*
if (!isset($_GET["route"])) {
    echo "Labuda";
    exit();
}
 
// формат гет-параметра HomeController/index
$route = $_GET["route"];
//$_GET["action"]();
$data = explode("/", $route);
$class="\\Controller\\". $data[0];
//$controller = new ("\\Controller\\". $data[0])();
$controller = new $class();
echo $controller->{$data[1]}();

//$controller = new $data[0](); так было раньше до namespce
//var_dump($controller);
//$controller->$action;
//echo $controller->index();
//echo $controller->{$data[1]}();
//echo "<br>";
//echo call_user_func_array([$controller, "index"], $data); 
 */
