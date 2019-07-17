<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 8:22 AM
 */

class DBConnection
{
    private $host = "localhost";
    private $username = "root";
    private $password = "1234";
    private $port = "3306";
    private $database = "POSSystem";

    private $connection;

    public function __construct()
    {
        $this->connection = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database,
            $this->port);
        if ($this->connection->connect_errno) {
            echo $this->connection->connect_errno;
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}