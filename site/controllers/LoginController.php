<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 8/10/2017
 * Time: 7:05 PM
 */

class LoginController extends Controller
{


    function indexAction()
    {
//        $userModel = $this->model->load('start');
        $data['pageTitle'] = 'login';

        $this ->view->generate('viwLogin.php', 'templateLogin.php', $data);
    }

}