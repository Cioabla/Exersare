<?php

class Application
{

    public static function start(){

        $controllerName = 'index';
        $actionName = 'index';
        $param = '';

        include "core/route.php";

        $controllerName = ucfirst(strtolower($controllerName)).'Controller';
        $actionName=strtolower($actionName).'Action';

        $controllerFile = 'controllers/'.$controllerName.'.php';


        if(file_exists($controllerFile)){
            require  $controllerFile;
        }else {
            echo $controllerFile;
            self::ErrorPage('Method '.$actionName.' does not exist in '.$controllerName);
        }

        $controller = new $controllerName;


        if(method_exists($controller , $actionName)){
            $controller->$actionName($param);
        }else{
            self::ErrorPage('Method '.$actionName. ' does not exist in '.$controllerName);
        }


    }

    public static function ErrorPage($message){
        if(SITE_ENV==='dev'){
            $view = new Views();
            $view->generate('viewError.php','template.php',array('message' => $message));
            die();
        }else {
            self::relocate('e404');
        }
    }

}