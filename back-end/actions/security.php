<?php


class Security extends DB
{

    public static function getSecurity($data)
    {
        if (is_array($data)) {
            $variable = array_map("htmlspecialchars", $data);
            $response = array_map("trim", $variable);
            $result = array_map("stripslashes", $response);
            return $result;
        } else {
            $variable = htmlspecialchars(trim($data));
            $result = stripslashes($variable);
            return $result;
        }
    }

    public static function getImageSecurity($filename)
    {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];
        if (!in_array($_FILES[$filename]['type'], $allowedTypes)) {
            return false;
        } else {
            
            $maxSize = 1024 * 1024; // 1 MB
            if ($_FILES[$filename]['size'] > $maxSize) {
                return false;
            }
            else {
                return true;
            }
        }


    }

}