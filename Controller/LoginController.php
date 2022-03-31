<?php

use Model\Employee as EmployeeModel;

class LoginController extends Controller
{
    public function loginPage()
    {
        $employees = new EmployeeModel;
        $employees = $employees->getEmployee();
        $this->render('Views/login.php', ['employees'=>$employees]);
    }

    public function login()
    {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $employee = new EmployeeModel;
        $employee_exist = $employee->login($email, $password);
        if($employee_exist)
        {
            header("Location: /".ROOT_FOLDER_NAME."/loginsuccess");
        }
    }

    public function loginSuccess()
    {
        $this->render('Views/loginSuccess.php');
    }
}
?>