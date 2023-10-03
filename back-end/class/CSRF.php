<?php
/* namespace OglakciCSRF\SecurityCSRF\CSRF; */

class CSRF
{

    public static $token;



    public static function create()
    {
        if (empty($_SESSION["csrf"])) {
          
            self::$token = sha1(md5(bin2hex(uniqid())));
            $_SESSION["csrf"] = self::$token;

            return self::$token;
        } else {
            unset($_SESSION["csrf"]);

            self::$token = sha1(md5(bin2hex(uniqid())));
            $_SESSION["csrf"] = self::$token;

            return self::$token;
        }
    }

    public static function check() {
        if($_POST) {
            $_token = $_POST["csrf_token"];
            if($_SESSION["csrf"]==$_token) {
                return true;
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }

    public static function csrf() {
        $_token = self::create();
        if($_token) {
            $input = '<input type="hidden" name="csrf_token" value="' . $_token . '">';

            echo $input;

            return true;
        }
        else {
            return false;
        }
        
    }
}
