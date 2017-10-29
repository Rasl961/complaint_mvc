<?php

namespace App\Models;

use PDO;

class Login extends \Core\Model
{

    public static function getUserData()
    {
        try {
            $db = static::getDB();
            $stmt = $db->query('SELECT id, username ,password,email, userstatus FROM users');
           
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
