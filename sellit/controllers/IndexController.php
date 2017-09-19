<?php

/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/9/2017
 * Time: 3:49 PM
 */
class IndexController extends Controller
{
    function indexAction(){
        $userModel = $this->model->load('user');

        $userModel->checkLogin();

        $data['pageTitle'] = 'Home';
        $this->view->generate('viewIndex.php', 'template.php', $data);
    }
}