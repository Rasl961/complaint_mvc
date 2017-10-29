<?php
namespace App\Controllers;

use \Core\View;
use App\Models\Admins;
use App\Models\Login;

class Admin extends \Core\Controller
{
    public function before()
    {
    }
   
    public function indexAction()
    {
        if (isset($_POST['delete_complaint'])) {
            $complaint_id =$_POST['delete_complaint'];
            $complaints = Admins::deleteComplaint($complaint_id);
         
            $page = '/Admin/index';
            $sec = "0";
            header("Refresh: $sec; url=$page");
            exit;
        }
        $complaints = Admins::getComplaints();
        View::renderTemplate('Admin/index.php',
        ['complaints' => $complaints]);
        
    
    }
    public function after()
    {
    }
}
