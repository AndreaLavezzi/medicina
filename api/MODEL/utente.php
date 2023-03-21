<?php
require("base.php");

class User extends BaseController{
    public function login($email, $password)
    {
        $sql = sprintf("SELECT email, passwd, id
        FROM `utente`
        where 1=1 ");
        $result = $this->conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($this->conn->real_escape_string($email) == $this->conn->real_escape_string($row["email"]) && $this->conn->real_escape_string($password) == $this->conn->real_escape_string($row["passwd"])) {
                return $this->conn->real_escape_string($row["id"]);
            }
        }

        return false;
    }
}
?>