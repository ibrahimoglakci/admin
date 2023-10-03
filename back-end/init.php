<?php

@session_start();
ob_start();
include_once("back-end/class/up.php");
include_once("back-end/class/DB.php");
include_once("back-end/class/Users.php");
include_once("back-end/actions/functions.php");
include_once("back-end/actions/config.php");
include_once("back-end/class/CSRF.php");
$settings = DB::table("settings")->where("ID", 1)->first();

define("ADMIN", $settings->adminUrl);
define("SITE", $settings->websiteUrl);
define("BACK_END", "back-end/");
define("FRONT_END", "front-end/");
define("DATA", FRONT_END . "data/");
define("PAGE", FRONT_END . "includes/");
define("IMG", FRONT_END . "assets/images/");
define("CLASSES", BACK_END . "class/");



if (isset($_COOKIE["lang"])) {
    $lang = $_COOKIE["lang"];
    $langdata = file_get_contents(BACK_END . 'lang/lang_' . $lang . '.json');
    $langdata = json_decode($langdata);

} else {
    $defaultLang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    $defaultLang = substr($defaultLang, 0, 2);
    $langdata = file_get_contents(BACK_END . 'lang/lang_' . $defaultLang . '.json');
    $langdata = json_decode($langdata);
    setcookie("lang", $langdata);
}

if (!isset($_SESSION["ID"])) {
    Functions::go(ADMIN . "login");

}