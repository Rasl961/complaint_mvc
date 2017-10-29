<?php

namespace App\Models;

use PDO;

class Registration extends \Core\Model
{
    public static $user_name;
    public static $user_password;
    public static $user_email;
    public static $browser;
    public static $ipaddress;
    public static function registerUser($user_name, $user_password, $user_email, $browser, $ipaddress)
    {
      
        self::$user_name =$user_name;
        self::$user_password =$user_password;
        self::$user_email =$user_email;
        self::$browser =$browser;
        self::$ipaddress =$ipaddress;
        
        try {
            echo 'New user ' .$user_name. ' been registrated successfully. <br>';
            echo 'Please, sign in';
            $db = static::getDB();
            $stmt = $db->query("INSERT INTO users (username,password, email,user_browser,user_ip) VALUES ('".$user_name."','".$user_password."','".$user_email."','".$browser."','".$ipaddress."')");
           
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
