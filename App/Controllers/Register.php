<?php
namespace App\Controllers;

use \Core\View;
use App\Models\Registration;

class Register extends \Core\Controller
{
    public function before(){

    }
  
    public function indexAction()
    {

        //GET USER`S BROWSER
        $agent = $_SERVER['HTTP_USER_AGENT'];
        $browserArray = array(
            'Firefox'=>'Firefox',
            'Google Chrome'=>'Chrome',
            'Internet Explorer'=>'MSIE',
            'Opera'=>'Opera',
            'Safari'=>'Safari'
        );
  
        foreach ($browserArray as $br => $v) {
            if (preg_match("/$v/", $agent)) {
                break;
            } else {
                $br = 'Unknown browser';
            }
        }
  
        $browser = $br;
       //GET USER`S IP
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP')) {
            $ipaddress = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_X_FORWARDED')) {
            $ipaddress = getenv('HTTP_X_FORWARDED');
        } elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        } elseif (getenv('HTTP_FORWARDED')) {
            $ipaddress = getenv('HTTP_FORWARDED');
        } elseif (getenv('REMOTE_ADDR')) {
            $ipaddress = getenv('REMOTE_ADDR');
        } else {
            $ipaddress = 'UNKNOWN';
        }
    


        View::renderTemplate('register/index.php');
    
        if (isset($_POST['register'])) {
            $user_name = $_POST['username'];
            $user_password = $_POST['password'];
            $user_password = md5($user_password);
            $user_email = $_POST['user_email'];
      
            $reg_user = Registration::registerUser($user_name, $user_password, $user_email, $browser, $ipaddress);
        }
    }
    public function after()
    {
    }
}
