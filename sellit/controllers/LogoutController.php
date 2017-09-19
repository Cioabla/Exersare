<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/11/2017
 * Time: 8:18 PM
 */

class LogoutController extends  Controller
{
    function logoutAction(){

        unset($_SESSION['username']);
        setcookie('remember', '', -3600, '/');
        relocate(SITE_URL);

    }
}