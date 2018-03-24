<?php
require_once "vendor/autoload.php";
// /users/test
$routes = explode('/', $_SERVER['REQUEST_URI']);

$controller_name = "Main";
$action_name = 'index';
// получаем контроллер
if (!empty($routes[1])) {
    $controller_name = $routes[1]; //courses
}

// получаем действие
if (!empty($routes[2])) {
    $action_name = $routes[2]; //php
    $exploded = explode('?', $action_name);
    $action_name = $exploded[0];
}
$filename = "controllers/".strtolower($controller_name).".php";

try {
    if (file_exists($filename)) {
        require_once $filename;
    } else {
        throw new Exception("File not found");
    }

    $classname = '\App\\'.ucfirst($controller_name);


    if (class_exists($classname)) {
        $controller = new $classname();
    } else {
        throw new Exception("File found but class not found");
    }

    if (method_exists($controller, $action_name)) {
        $controller->$action_name();
    } else {
        throw new Exception("Method not found");
    }
} catch (Exception $e) {
    require "errors/404.php";
}

//router + controller + model

