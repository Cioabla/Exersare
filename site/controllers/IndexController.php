<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 7/28/2017
 * Time: 4:09 PM
 */

class IndexController extends Controller
{

    /**
     * Created by PhpStorm.
     * User: Rio
     * Date: 7/28/2017
     * Time: 3:26 PM
     */


    function indexAction()
    {
//        $userModel = $this->model->load('start');
        $data['pageTitle'] = 'Home';

        $this ->view->generate('viewIndex.php', 'templateNormal.php', $data);
    }

}