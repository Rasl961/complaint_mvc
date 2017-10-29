<?php

namespace App\Models;

use PDO;

class Dash extends \Core\Model
{

    public static function getUserData()
    {

        // $host = 'localhost';
        // $dbname = 'mvc_tuts';
        // $username = 'root';
        // $password = '';

        try {
            // $dsn = "mysql:host=$host;dbname=$dbname";
            // $db = new PDO($dsn,$username,$password);

            $db = static::getDB();
            $stmt = $db->query('SELECT id, username ,password FROM users');
           
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getComplaints(){
        
                 
        try {
            
              $db = static::getDB();
              $stmt = $db->query('SELECT id, complaint_title ,complaint_description,posted_by,post_date FROM complaints ORDER BY post_date');
             
              $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
              return $results;
          }
  
          catch(PDOException $e){
              echo $e->getMessage();
          }
            }
        
}
