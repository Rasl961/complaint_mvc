<?php

namespace App\Models;

use PDO;

class Admins extends \Core\Model
{
    public static $complaint_id;

    public static function getUserData()
    {

        try {
            $db = static::getDB();
            $stmt = $db->query('SELECT id, username ,password FROM users');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getComplaints()
    {
                         
        try {
              $db = static::getDB();
              $stmt = $db->query('SELECT id, complaint_title ,complaint_description,user_email,user_website,posted_by,post_date FROM complaints ORDER BY post_date');
             
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function deleteComplaint($complaint_id)
    {
        self::$complaint_id =$complaint_id;           
                         
        try {
              $db = static::getDB();
              $stmt = $db->query('DELETE FROM complaints where id ="'.$complaint_id.'" ');
                     
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
