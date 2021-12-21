<?php

const DB_HOST = "localhost";        //HOST
const DB_USERNAME  = "root";      // DB username
const DB_PASSWORD = "";            // DB password
const DB_NAME = "php_quiz";         // DB name

$connect = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME)
or die("Lỗi kết nối CSDL: ".$connect->connect_error);