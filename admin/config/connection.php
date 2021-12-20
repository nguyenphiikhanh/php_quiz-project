<?php

define("DATABASE_HOST","localhost");        //HOST
define("DATABASE_USERNAME","root");        // DB username
define("DATABASE_PASSWORD","");            // DB password
define("DATABASE_NAME","php_quiz");         // DB name

class Connection
{
    private $host = DATABASE_HOST;
    private $user = DATABASE_USERNAME;
    private $pass = DATABASE_PASSWORD;
    private $name = DATABASE_NAME;

    public $link;

    public function __construct()
    {
        $this->DBconnect();
    }

    private function DBconnect()
    {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->name)
            or
            die("Lỗi kết nối Cơ Sở Dữ Liệu: " . $this->link->connect_error);
    }

    public function close_connect()
    {
        mysqli_close($this->link);
        exit();
    }
}
