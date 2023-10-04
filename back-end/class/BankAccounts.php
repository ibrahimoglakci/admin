<?php 

class BankAccounts extends DB{

    public static $bankaccounts;

    function __construct() {
        self::$bankaccounts;
    }

    public static function all() {
        $banks = DB::table("bank_accounts")->get();
       
        self::$bankaccounts = $banks;
        
        
        return self::$bankaccounts;
    }

}