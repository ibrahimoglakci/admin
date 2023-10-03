<?php
@session_start();
ob_start();


class Users extends DB
{

    public static $getUser = false;
    public static $userID = false;


    public static function registerUser($fullName, $userName, $userPassword, $userMail, $userAdress = NULL, $userPhone = NULL, $userStatus = 2)
    {

        $hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);
        $sessionID = Functions::generateToken(32) . "" . uniqid();
        ("SELECT * FROM kullanicilar WHERE userName=?");
        $otpKey = rand(100000, 999999);
        $register = DB::table("users")
            ->insert(
                [
                    "fullName" => $fullName,
                    "userName" => $userName,
                    "userPassword" => $hashPassword,
                    "sessionID" => $sessionID,
                    "userMail" => $userMail,
                    "userAdress" => $userAdress,
                    "userPhone" => $userPhone,
                    "userStatus" => $userStatus,
                    "otpKey" => $otpKey,


                ]
            );
        if ($register) {
            return true;
        } else {
            return false;
        }




    }



    public static function login($userName, $userPassword,$remember=0)
    {
        $user = DB::table("users")
            ->whereRaw("userName=? OR userMail=?", [$userName, $userName])
            ->first();
        $pass = $user->userPassword;
        if ($user) {
            if ($userPassword == $pass) {
                self::$getUser = $user;
                self::$userID = $user->ID;
                $_SESSION["token"]=$user->sessionID;
                $_SESSION["i_user"]=json_encode($user);
                $_SESSION["ID"]=self::$userID;
                if($remember==1) {
                    setcookie("u_t", self::$getUser->sessionID, time() + (72 * 60 * 60), "/");
                }
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

    public static function getUser($sessionID) {
        $user = DB::table("users")
        ->whereRaw("sessionID=?", [$sessionID])
        ->first();

        if($user) {
            return $user;
        }
        else {
            return false;
        }
    }

    public static function forgotPassword($userMail,$url=NULL) {
        $user=self::table("users")
                    ->where([
                        "userMail"=>$userMail,
                        "userStatus"=>1
                    ])
                    ->first();
        if($user) {
            $token=Functions::generateToken(64);
            $tokenadd=self::table("tokens_passwords")
                            ->updateOrCreate(
                                [
                                    "userID"=>$user->ID

                                ],
                                [
                                    "userID"=>$user->ID,
                                    "token"=>$token
                                ]
                            );
            if($tokenadd) {
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

}