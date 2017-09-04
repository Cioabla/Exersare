<?php

class Application
{
    public static  function start()
    {
        $controllerName = 'home';
        $actionName = 'index';
        $param = '';

        include "core/route.php";


        $controllerName = ucfirst(strtolower($controllerName)).'Controller';
        $actionName = strtolower($actionName).'Action';

        $controllerFile = 'controllers/' . $controllerName. '.php';

        if(file_exists($controllerFile))
        {

            require $controllerFile;
        }
        else
        {
            self::ErrorPage('Controller '.$controllerName . 'does not exist!');
        }


        $controller = new $controllerName;

        if(method_exists($controller,$actionName))
        {
            $controller->$actionName($param);
        }
        else
        {
            self::ErrorPage('Method '.$actionName. ' does not exist in '.$controllerName);
        }

    }

    //De lucrat la partea de jos


    public static function ErrorPage($message)
    {
        if(SITE_ENV === 'dev') {

        }
    }
}