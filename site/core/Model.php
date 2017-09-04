<?php

class Model
{
    private  $connection;

    function __construct()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER,DB_PASS, DB_NAME);

        if($this->connection->connect_errno)
        {
            Application::ErrorPage('Database connection failed: '.$this->connection->connect_error);
        }
        $this->connection->set_charset('uf8');

    }

    public function load($mode)
    {
        $modelName = ucfirst($mode).'Model';
        $modelFile = 'models/' . $modelName.'.php';

        if(file_exists($modelFile))
        {
            require $modelFile;
            return new $modelName;
        }
        else
        {
            Application::ErrorPage('Model '. $modelName . 'was not found!');
        }

        return false;
    }
}