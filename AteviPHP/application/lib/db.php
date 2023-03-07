<?php 

namespace application\lib;

use mysqli;

class db {

    protected $database;

    public function __construct()
    {
        $connect = require 'application/config/connect.php';
        $this->database = new mysqli($connect['host'], $connect['user'], $connect['password'],$connect['table'] );
    }

    public function query($sqlQuery, $params = []) {
        $result = mysqli_query($this->database,$sqlQuery);
        $row = mysqli_fetch_assoc($result);
        return $result;
    }

}