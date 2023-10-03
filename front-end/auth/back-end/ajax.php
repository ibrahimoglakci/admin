<?php
include_once("../../../back-end/class/up.php");
include_once("../../../back-end/class/DB.php");
include_once("../../../back-end/class/Users.php");
include_once("../../../back-end/actions/security.php");

if ($_POST) {
    $type = $_POST["type"];
    switch ($type) {
        case 'login_form':
            $user_post = Security::getSecurity($_POST['username']);
            $password_post = Security::getSecurity($_POST['password']);
            if (isset($user_post) && isset($password_post)) {
                $username = $_POST['username'];
                $password = md5(sha1($_POST['password']));
                $remember = isset($_POST['remember']) ? 1 : 0;

                $login = Users::login($username, $password, $remember);
                if ($login) {
                    echo "ok";
                } else {
                    echo "error";
                }
            } else {
                echo "empty";
            }
            break;


        case 'lock_screen':
            $token = Security::getSecurity($_POST['token']);
            $password_post = Security::getSecurity($_POST['password']);
            
            if (isset($token) && isset($password_post)) {
                $user = DB::table("users")
                ->whereRaw("sessionID=?", [$token])
                ->first();
                $username=$user->userName;
                $password = md5(sha1($_POST['password']));

                $login = Users::login($username, $password);
                if ($login) {
                    echo "ok";
                } else {
                    echo "error";
                }
            } else {
                echo "empty";
            }
            break;
        default:
            # code...
            break;
    }


} else {
    echo "permission";
}