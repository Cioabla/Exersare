<?php

/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/9/2017
 * Time: 3:33 PM
 */
class Model
{
    /** @var mysqli */
    private $connection;

    /**
     * Model constructor.
     */
    function __construct()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->connection->connect_errno) {
            Application::ErrorPage('Database connection failed: ' . $this->connection->connect_error);
        }
        $this->connection->set_charset('uf8');
    }

    public function load($model)
    {
        $modelName = ucfirst($model) . 'Model';

        $modelFile = 'models/' . $modelName . '.php';

        if (file_exists($modelFile)) {
            require $modelFile;
            return new $modelName;
        } else {
            Application::ErrorPage('Model ' . $modelName . ' was not found!');
        }

        return false;
    }

    /**
     * @param $var
     *
     * @return string
     */
    public function escape($var)
    {
        return $this->connection->real_escape_string($var);
    }

    /**
     * @return mixed
     */
    public function get_insert_id()
    {
        return $this->connection->insert_id;
    }

    /**
     * @param $sql
     *
     * @return bool|mysqli_result
     */
    protected function execute($sql)
    {
        $result = $this->connection->query($sql);
        if ($this->connection->errno) {
            Application::ErrorPage("Query failed: " . $this->connection->error);
        }

        return $result;
    }

    /**
     * @param $id
     * @param $table
     *
     * @return array|bool
     */
    public function get_by_id($id, $table)
    {
        $sql = "SELECT * FROM " . $table . " WHERE id = '" . self::escape($id) . "'";
        $result = self::execute($sql);
        $data = $result->fetch_assoc();
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    /**
     * @param $table
     *
     * @return array|bool
     */
    public function get_all($table)
    {
        $sql = "SELECT * FROM " . $table;
        $result = self::execute($sql);
        $return = array();
        while ($data = $result->fetch_assoc()) {
            $return[] = $data;
        }
        if (count($return) > 0) {
            return $return;
        } else {
            return false;
        }
    }

    /**
     * @param $sql
     *
     * @return array|bool
     */
    public function get_custom($sql)
    {

        $result = self::execute($sql);

        $return = array();

        while ($c = $result->fetch_assoc()) {
            $return[] = $c;
        }
        if (count($return) > 0) {
            return $return;
        } else {
            return false;
        }
    }

    /**
     * @param $key
     * @param $value
     * @param $table
     *
     * @return bool
     */
    public function check_if_exists($key, $value, $table)
    {
        $sql = "SELECT * FROM " . $table . " WHERE " . self::escape($key) . " = '" . self::escape($value) . "'";
        $result = self::execute($sql);
        $data = $result->fetch_assoc();
        if (!is_null($data)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $id
     * @param $table
     *
     * @return bool
     */
    public function delete($id, $table)
    {
        $sql = "DELETE FROM " . $table . " WHERE id = '" . self::escape($id) . "'";

        if (self::execute($sql)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Model destructor
     */
    function __destruct()
    {
        if (!$this->connection->connect_errno) {
            $this->connection->close();
        }
    }
}