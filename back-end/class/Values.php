<?php 

class Values extends DB{

    public static $values;

    function __construct() {
        self::$values;
    }

    public static function values($table) {
        $value = DB::table($table)->get();
       
        self::$values = $value;
        
        
        return self::$values;
    }

}