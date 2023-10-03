<?php
include_once("../../../back-end/class/up.php");
include_once("../../../back-end/class/DB.php");
include_once("../../../back-end/class/Users.php");
$settings = DB::table("settings")->where("ID", 1)->first();
define("ADMIN", $settings->adminUrl);

session_start();

$_SESSION = array();

// Oturum çerezini sil
if (isset($_COOKIE["u_t"])) {
    setcookie("u_t", '', time()-42000, '/');
}

session_destroy();

?>
