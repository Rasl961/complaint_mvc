<?php
namespace App\Controllers;

use \Core\View;
use App\Models\Dash;

class Dashboard extends \Core\Controller
{   
    public function before(){

    }
   
    public function indexAction()
    {
        $complaints = Dash::getComplaints();
        View::renderTemplate('Dashboard/index.php',
        ['complaints' => $complaints]);
        
    }

    public function logoutAction()
    {
      
        if (isset($_POST['logout'])) {
            $username = false;
            $password = false;
            session_destroy();
            header('Location: /');
        }
    }

    public function editAction()
    {
    }
    public function after()
    {
    }
}
