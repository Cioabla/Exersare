<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/11/2017
 * Time: 9:02 PM
 */

class HomeController extends Controller
{
    function indexAction() {
        if(!isset($_SESSION['username'])){
            relocate('/index/index');
        }
        $data['pageTitle'] = 'HomeUser';
        $this->view->generate('viewIndex.php', 'templateUser.php', $data);
    }
}