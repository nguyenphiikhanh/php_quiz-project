<?php

include_once("config.php");

class Connection
{
    private $host = DATABASE_HOST;
    private $user = DATABASE_USERNAME;
    private $pass = DATABASE_PASSWORD;
    private $name = DATABASE_NAME;

    public $connection;

    public function __construct()
    {
        $this->DBconnect();
    }

    private function DBconnect()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->name)
            or
            die("Lỗi kết nối Cơ Sở Dữ Liệu: " . $this->connection->connect_error);
    }

    public function close_connect()
    {
        mysqli_close($this->connection);
        exit();
    }
}
