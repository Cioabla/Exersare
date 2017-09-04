<?php

class Controller
{
    public $model;
    public $view;

    public $data = array();

    function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }
}