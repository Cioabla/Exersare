<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/11/2017
 * Time: 2:09 PM
 */

class LinkController extends Controller
{

    function linkAction(){
        $userModel = $this->model->load('user');
        $userModel->checkIsNotLogged();
        $data['pageTitle'] = 'Home';
        $this->view->generate('viewLink.php', 'templateUser.php', $data);
    }
}