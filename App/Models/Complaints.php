<?php

namespace App\Models;

use PDO;

class Complaints extends \Core\Model
{
    public static $complaint_title;
    public static $complaint_description;
    public static $posted_by;
    public static $user_email;
    public static $user_website;
    public static $post_date;
    public static function addComplaint(
        $complaint_title,
        $complaint_description,
        $posted_by,
        $user_email,
        $user_website,
        $post_date
    ) {

         self::$complaint_title =$complaint_title;
         self::$complaint_description =$complaint_description;
         self::$posted_by =$posted_by;
         self::$user_email =$user_email;
         self::$user_website =$user_website;
         self::$post_date = $post_date;
          
        try {
            $db = static::getDB();
            $stmt = $db->query("INSERT INTO complaints (complaint_title,
              complaint_description,posted_by,user_email,user_website,post_date) 
              VALUES ('".$complaint_title."','".$complaint_description."','".$posted_by."',
              '".$user_email."','".$user_website."','".$post_date."')");
                // echo "You`ve added a new complaint";
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
