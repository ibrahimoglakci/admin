<?php

@session_start();
ob_start();
$path = "../../";
include_once($path."class/up.php");
include_once($path."class/DB.php");
include_once($path."class/Users.php");
include_once($path."actions/functions.php");
include_once($path."actions/config.php");
include_once($path."actions/security.php");
include_once($path."class/CSRF.php");
$settings = DB::table("settings")->where("ID", 1)->first();

define("ADMIN", $settings->adminUrl);
define("SITE", $settings->websiteUrl);
define("BACK_END", "back-end/");
define("FRONT_END", "front-end/");
define("DATA", FRONT_END . "data/");
define("PAGE", FRONT_END . "includes/");
define("IMG", FRONT_END . "assets/images/");



if ($_POST) {
    $type = Security::getSecurity($_POST["type"]);

    switch ($type) {
        case 'general_settings':
            $csrf_check = CSRF::check();
            if ($csrf_check) {
                $title = Security::getSecurity($_POST['title']);
                $description = Security::getSecurity($_POST['description']);
                $keywords = Security::getSecurity($_POST['keywords']);

                if (isset($title) && isset($description) && isset($keywords)) {

                    $update = DB::table("settings")->where("ID", 1)->update([
                        "websiteTitle" => $title,
                        "websiteDescription" => $description,
                        "websiteKeywords" => $keywords,

                    ]);

                    if ($update) {
                        echo "ok";
                        
                    } else {
                        echo "error";
                    }
                } else {
                    echo "empty";
                }
            } else {
                header('Content-Type: application/json');
                http_response_code(401);
                $responseData = array(
                    'message' => 'Unauthorized processing',
                    'reason' => 'invalid token'

                );
                return json_encode($responseData);
            }

            break;
        case 'hosting_settings':
            $csrf_check = CSRF::check();
            if ($csrf_check) {
                $email = Security::getSecurity($_POST['email']);
                $password = Security::getSecurity($_POST['password']);
                $host = Security::getSecurity($_POST['host']);
                $port = Security::getSecurity($_POST['port']);

                if (isset($email) && isset($password) && isset($host) && isset($port)) {

                    $update = DB::table("settings")->where("ID", 1)->update([
                        "websiteEmail" => $email,
                        "websitePassword" => $password,
                        "websiteMailHost" => $host,
                        "websiteMailPort" => $port,

                    ]);

                    if ($update) {
                        echo "ok";
                    } else {
                        echo "error";
                    }
                } else {
                    echo "empty";
                }
            } else {
                header('Content-Type: application/json');
                http_response_code(401);
                $responseData = array(
                    'message' => 'Unauthorized processing',
                    'reason' => 'invalid token'

                );
                return json_encode($responseData);
            }
            break;

        case 'logo_settings':
            $csrf_check = CSRF::check();
            if ($csrf_check) {
                $mode = Security::getSecurity($_POST["menu_mode"]);
                $menu_type = Security::getSecurity($_POST["menu_type"]);
                if (isset($_FILES["logo"]) and isset($mode) and isset($menu_type)) {
                    $logocheck = Security::getImageSecurity("logo");
                    if ($logocheck) {
                        $logo = $_FILES["logo"];
                        $logoname = $_FILES["logo"]["name"];
                        $uploadFile = Functions::uploadFile($logo, $path . IMG . "logo/");
                        if ($uploadFile != false) {

                            $update = DB::table("settings")->where("ID", 1)->update([
                                "websiteLogo_" . $mode . "_" . $menu_type => $uploadFile

                            ]);
                            /* $delete=Functions::deleteAllFilesExceptOne($path.IMG,$uploadFile); */
                            if ($update) {
                                echo "ok";
                            } else {
                                echo "error";
                            }
                        }
                    } else {
                        echo "empty";
                    }
                } else {
                    echo "empty";
                }
            } else {
                header('Content-Type: application/json');
                http_response_code(401);
                $responseData = array(
                    'message' => 'Unauthorized processing',
                    'reason' => 'invalid token'

                );
                return json_encode($responseData);
            }
            break;

        case 'contact_settings':
            $csrf_check = CSRF::check();
            if ($csrf_check) {
                /* $email = Security::getSecurity($_POST['email']); */
                /* $phone = Security::getSecurity($_POST['phone']); */
                $email = empty(Security::getSecurity($_POST['email'])) ? false : $_POST['email'];
                $phone = empty(Security::getSecurity($_POST['phone'])) ? false : $_POST['phone'];
                $trendyol = empty(Security::getSecurity($_POST['trendyol'])) ? NULL : $_POST['trendyol'];
                $hepsiburada = empty(Security::getSecurity($_POST['hepsiburada'])) ? NULL : $_POST['hepsiburada'];
                $n11 = empty(Security::getSecurity($_POST['n11'])) ? NULL : $_POST['n11'];
                $ciceksepeti = empty(Security::getSecurity($_POST['ciceksepeti'])) ? NULL : $_POST['ciceksepeti'];
                $sahibinden = empty(Security::getSecurity($_POST['sahibinden'])) ? NULL : $_POST['sahibinden'];
                $amazon = empty(Security::getSecurity($_POST['amazon'])) ? NULL : $_POST['amazon'];
                $facebook = empty(Security::getSecurity($_POST['facebook'])) ? NULL : $_POST['facebook'];
                $instagram = empty(Security::getSecurity($_POST['instagram'])) ? NULL : $_POST['instagram'];
                $twitter = empty(Security::getSecurity($_POST['twitter'])) ? NULL : $_POST['twitter'];
                $linkedin = empty(Security::getSecurity($_POST['linkedin'])) ? NULL : $_POST['linkedin'];
                $youtube = empty(Security::getSecurity($_POST['youtube'])) ? NULL : $_POST['youtube'];
                $tiktok = empty(Security::getSecurity($_POST['tiktok'])) ? NULL : $_POST['tiktok'];
                $whatsapp = empty(Security::getSecurity($_POST['whatsapp'])) ? NULL : $_POST['whatsapp'];
                $pinterest = empty(Security::getSecurity($_POST['pinterest'])) ? NULL : $_POST['pinterest'];
                $tumblr = empty(Security::getSecurity($_POST['tumblr'])) ? NULL : $_POST['tumblr'];
                $google = empty(Security::getSecurity($_POST['google'])) ? NULL : $_POST['google'];

                if ($email != false && $phone != false) {

                    $update = DB::table("settings")->where("ID", 1)->update([
                        "websiteMail" => $email,
                        "websitePhone" => $phone,
                        "trendyol" => $trendyol,
                        "hepsiburada" => $hepsiburada,
                        "n11" => $n11,
                        "ciceksepeti" => $ciceksepeti,
                        "sahibinden" => $sahibinden,
                        "amazon" => $amazon,
                        "facebook" => $facebook,
                        "instagram" => $instagram,
                        "twitter" => $twitter,
                        "linkedin" => $linkedin,
                        "youtube" => $youtube,
                        "tiktok" => $tiktok,
                        "whatsapp" => $whatsapp,
                        "pinterest" => $pinterest,
                        "tumblr" => $tumblr,
                        "google" => $google

                    ]);

                    if ($update) {
                        echo "ok";
                    } else {
                        echo "error";
                    }
                } else {
                    echo "empty";
                }
            } else {
                header('Content-Type: application/json');
                http_response_code(401);
                $responseData = array(
                    'message' => 'Unauthorized processing',
                    'reason' => 'invalid token'

                );
                return json_encode($responseData);
            }


            break;


        default:
            # code...
            break;
    }
}
