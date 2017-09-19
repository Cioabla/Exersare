<?php

/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/9/2017
 * Time: 3:33 PM
 */
class Controller
{

    /** @var Model */
    public $model;

    /** @var View */
    public $view;

    /** @var array */
    public $data = array();

    /**
     * Controller constructor.
     */
    function __construct()
    {
        $this->view = new Views();
        $this->model = new Model();
    }
}
