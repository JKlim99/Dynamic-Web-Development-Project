<?php
namespace Model;

class Code extends Model
{
    public function getCode()
    {
        return $this->query("SELECT * FROM code")[0];
    }

    public function setCode($code = "AB123")
    {
        return $this->execute("UPDATE `code` SET `code` = '". $code ."'");
    }
}

?>