<?php

use Model\Code as CodeModel;

 class DashboardController extends Controller
{

    public function dashboard()
    {
        $this->render('Views/dashboard.php');
    }

    public function generateCode()
    {
        $new_code = $this->getRandomCode();
        $code = new CodeModel;
        $code->setCode($new_code);

        // return new code as json response
        $response = new stdClass();
        $response->new_code = $new_code;
        $json = json_encode($response);
        echo $json;
    }
    
    private function getRandomCode($length = 5) {
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charsLength = strlen($chars);
        $randomCode = '';
        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $chars[rand(0, $charsLength - 1)];
        }
        return $randomCode;
    }
}

?>