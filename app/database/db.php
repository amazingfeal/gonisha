<?php

class DataBase {

    private $connection;

    function __construct() {

        global $config;
        $host = $config['db']['host'];
        $user = $config['db']['user'];
        $pass = $config['db']['pass'];
        $name = $config['db']['name'];

        $this->connection = new mysql($host, $user, $pass, $name);
        if($this->connection->connect_error) {
            echo "Connection failed: " . $this->connection->connect_error;
            exit;
        }
    }

    function insert($sql) {
        $id = $this->connection->query($sql);
        return $id;
    }

}