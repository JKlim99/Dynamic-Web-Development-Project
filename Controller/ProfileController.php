<?php

use Model\Employee as EmployeeModel;

 class ProfileController extends Controller
{

    public function profile()
    {
        $id = $_SESSION['id'];
        $employee = new EmployeeModel;
        $result = $employee->getProfile($id);
        $this->render('Views/profile.php', $result);
    }

    public function updateProfile()
    {
        $id = $_SESSION['id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $employee = new EmployeeModel;
        $employee_created = $employee->updateEmployee($id, $name, $email, $admin);

        if($password != '')
        {
            $employee->updatePassword($id, md5($password));
        }

        header("Location: /".ROOT_FOLDER_NAME."/profile");
    }
    
}

?>