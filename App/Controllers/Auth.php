<?php
namespace App\Controllers;

use \Core\View;
use App\Models\Login;

class Auth extends \Core\Controller
{   
    public function before(){

    }

    public function indexAction()
    {
      $agent = $_SERVER['HTTP_USER_AGENT'];
      $browserArray = array(
          'Firefox'=>'Firefox',
          'Google Chrome'=>'Chrome',
          'Internet Explorer'=>'MSIE',
          'Opera'=>'Opera',
          'Safari'=>'Safari'
      );

      foreach($browserArray as $br =>$v) {
          if(preg_match("/$v/", $agent)){
              break;
          }

          else{
              $br = 'Unknown browser';
          }
      }

      $browser = $br;
        $users = Login::getUserData();
        View::renderTemplate('Login/login.php',
        ['users' => $users]);
        
        $username = false;
        $password = false;
        $userstatus = false;
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $passwordEncrypted = md5($password);
            foreach ($users as $user) {
                if ($user['username']==$username && $user['password'] == $passwordEncrypted) {
                    $userstatus = $user['userstatus'];
                               
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['username'];
                    $_SESSION['user_status'] = $userstatus;
                    $_SESSION['logged_status'] = 'logged';
                             
              
                    if (isset($_SESSION['user_id'])) {
                        header('Location:/');
                        exit;
                    }
                } else {
                    echo 'Wrong username or password';
                    echo  $userstatus;
                }
            }
        }
    }
    public function after()
    {
    }
}
