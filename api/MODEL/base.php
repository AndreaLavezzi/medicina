<?php
class BaseController{
    protected $conn;
    public function __construct($db){
        $this->conn = $db;
    }
}
?>