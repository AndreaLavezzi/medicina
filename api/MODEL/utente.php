<?php
require("base.php");

class User extends BaseController{
    public function login($email, $password)
    {
        $sql = sprintf("SELECT id, email, passwd, ruolo
        FROM `utente`
        where 1 = 1");
        $result = $this->conn->query($sql);
        

        return $result;
    }
}
?>