<?php
$routes = explode('/', $_SERVER['REQUEST_URI']);

// get controller name
if (isset($routes[1]) && !empty($routes[1])) {
    $controllerName = $routes[1];
    $controllerName = str_replace(".php","",$controllerName);
}

// get name action
if (isset($routes[2]) && !empty($routes[2])) {
    $actionName = $routes[2];
}

if (isset($routes[3]) && !empty($routes[3])) {
    $param = $routes[3];
}