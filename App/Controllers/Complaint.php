<?php
namespace App\Controllers;

use \Core\View;
use App\Models\Complaints;

class Complaint extends \Core\Controller
{
    public function before()
    {
    }
   
    public function indexAction()
    {
        View::renderTemplate('Complaint/index.php');

        if (isset($_POST['addcomplaint'])) {
            $complaint_title = $_POST['complaint_title'];
            $complaint_description = $_POST['complaint_description'];
            $posted_by = $_SESSION['user_name'];
            $user_email = $_POST['user_email'];
            $user_website = $_POST['user_website'];
            $post_date = date("Y-m-d H:i:s");
                
            echo $posted_by;
            $add_comp = Complaints::addComplaint($complaint_title,
            $complaint_description, $posted_by, $user_email, $user_website, $post_date);
            
            $page = '/';
            $sec = "0";
            header("Refresh: $sec; url=$page");
            exit;
        }
    }
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts Controller';
    }

    public function editAction()
    {
    }

    public function after()
    {
    }
}
