<?php
/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 7/28/2017
 * Time: 4:09 PM
 */

class PreferinteController extends Controller
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
        $data['pageTitle'] = 'preferinte';

        $this ->view->generate('viewPreferinte.php', 'templateNormal.php', $data);
    }

}