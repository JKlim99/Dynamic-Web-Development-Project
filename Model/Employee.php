<?php
namespace Model;

class Employee extends Model
{
    public function getEmployee($limit = 10)
    {
        return $this->query("SELECT * FROM employee LIMIT ".$limit);
    }

    public function createEmployee($name = "", $email = "", $password = "")
    {
        return $this->execute("INSERT INTO `employee`(`name`, `email`, `password`) VALUES ('". $name ."','". $email ."','". $password ."')");
    }
}

?>