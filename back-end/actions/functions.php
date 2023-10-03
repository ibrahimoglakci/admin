<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Functions extends DB
{

    public static function createTables()
    {

        $sql = "CREATE TABLE IF NOT EXISTS settings (
                ID INT(11) NOT NULL AUTO_INCREMENT,
                websiteTitle VARCHAR(255),
                websiteDescription VARCHAR(255),
                websiteKeywords VARCHAR(255),
                websiteLogo_dark_wm VARCHAR(255),
                websiteLogo_light_wm VARCHAR(255),
                websiteLogo_dark_sm VARCHAR(255),
                websiteLogo_light_sm VARCHAR(255),
                adminUrl VARCHAR(255),
                websiteUrl VARCHAR(255),
                websiteMail VARCHAR(255),
                websitePhone VARCHAR(11),
                trendyol VARCHAR(255),
                hepsiburada VARCHAR(255),
                n11 VARCHAR(255),
                ciceksepeti VARCHAR(255),
                sahibinden VARCHAR(255),
                amazon VARCHAR(255),
                facebook VARCHAR(255),
                instagram VARCHAR(255),
                twitter VARCHAR(255),
                linkedin VARCHAR(255),
                youtube VARCHAR(255),
                tiktok VARCHAR(255),
                whatsapp VARCHAR(255),
                pinterest VARCHAR(255),
                tumblr VARCHAR(255),
                google VARCHAR(255),
                websitePassword VARCHAR(255),
                websiteMailHost VARCHAR(255),
                websiteMailPort INT(11),
                websiteEmail VARCHAR(255),
                created_at DATETIME,
                updated_at DATETIME,
                PRIMARY KEY (ID)
                );";

        self::$connection->exec($sql);

        $check = self::table("settings")->where("ID", 1)->get();
        if ($check == false) {
            $sql = "INSERT INTO settings (websiteTitle, websiteDescription, websiteKeywords, websiteLogo_dark_wm, websiteLogo_light_wm, websiteLogo_dark_sm, websiteLogo_light_sm, adminUrl, websiteUrl, websiteMail, websitePhone, websitePassword, websiteMailHost, websiteMailPort, websiteEmail, created_at, updated_at)
            VALUES (:websiteTitle, :websiteDescription, :websiteKeywords, :websiteLogo_dark_wm, :websiteLogo_light_wm, :websiteLogo_dark_sm, :websiteLogo_light_sm, :adminUrl, :websiteUrl, :websiteMail, :websitePhone, :websitePassword, :websiteMailHost, :websiteMailPort, :websiteEmail, NOW(), NOW())";

            $stmt = self::$connection->prepare($sql);
            // Değerleri atama
            $websiteTitle = "Website Title";
            $websiteDescription = "Website Description";
            $websiteKeywords = "Website keywords";
            $websiteLogo = "logo.png";
            $adminUrl = "http://localhost/admin/";
            $websiteUrl = "http://localhost/";
            $websiteMail = "info@example.com";
            $websitePhone = "+905111111111";
          
            $websitePassword = "password123";
            $websiteMailHost = "smtp.example.com";
            $websiteMailPort = 587;
            $websiteEmail = "mailusername";
            // Parametreleri atama
            $stmt->bindParam(':websiteTitle', $websiteTitle);
            $stmt->bindParam(':websiteDescription', $websiteDescription);
            $stmt->bindParam(':websiteKeywords', $websiteKeywords);
            $stmt->bindParam(':websiteLogo_dark_wm', $websiteLogo);
            $stmt->bindParam(':websiteLogo_light_wm', $websiteLogo);
            $stmt->bindParam(':websiteLogo_dark_sm', $websiteLogo);
            $stmt->bindParam(':websiteLogo_light_sm', $websiteLogo);
            $stmt->bindParam(':adminUrl', $adminUrl);
            $stmt->bindParam(':websiteUrl', $websiteUrl);
            $stmt->bindParam(':websiteMail', $websiteMail);
            $stmt->bindParam(':websitePhone', $websitePhone);

            $stmt->bindParam(':websitePassword', $websitePassword);
            $stmt->bindParam(':websiteMailHost', $websiteMailHost);
            $stmt->bindParam(':websiteMailPort', $websiteMailPort);
            $stmt->bindParam(':websiteEmail', $websiteEmail);

            // Sorguyu çalıştırma
            $stmt->execute();
        }

        $sql = "CREATE TABLE IF NOT EXISTS users (
            ID INT(11) NOT NULL AUTO_INCREMENT,
            fullName VARCHAR(255),
            userName VARCHAR(255),
            userPassword VARCHAR(255),
            sessionID VARCHAR(255),
            userRank VARCHAR(255),
            userMail VARCHAR(255),
            userImage VARCHAR(255),
            userAdress VARCHAR(255),
            userPhone VARCHAR(255),
            userStatus INT(11),
            otpKey INT(11),
            created_at DATETIME,
            updated_at DATETIME,
            PRIMARY KEY (ID)
            );";

        self::$connection->exec($sql);
        $check = self::table("users")->where("ID", 1)->get();
        if ($check == false) {
            $sql = "INSERT INTO users (fullName, userName, userPassword, sessionID, userRank, userMail, userImage, userAdress, userPhone, userStatus, otpKey, created_at, updated_at)
            VALUES (:fullName, :userName, :userPassword, :sessionID, :userRank, :userMail, :userImage, :userAdress, :userPhone, :userStatus, :otpKey, NOW(), NOW())";

            $stmt = self::$connection->prepare($sql);
            // Değerleri atama
            $fullName = "Admin Example";
            $userName = "admin";
            $userPassword = md5(sha1("12345"));
            $sessionID = self::generateToken(32) . "" . uniqid();
            $userRank = "Admin";
            $userMail = "admin@admin.com";
            $userImage = "default.png";
            $userAdress = "Example";
            $userPhone = "+901111111111";
            $userStatus = "1";
            $otpKey = "111111";
            // Parametreleri atama
            $stmt->bindParam(':fullName', $fullName);
            $stmt->bindParam(':userName', $userName);
            $stmt->bindParam(':userPassword', $userPassword);
            $stmt->bindParam(':sessionID', $sessionID);
            $stmt->bindParam(':userRank', $userRank);
            $stmt->bindParam(':userMail', $userMail);
            $stmt->bindParam(':userImage', $userImage);
            $stmt->bindParam(':userAdress', $userAdress);
            $stmt->bindParam(':userPhone', $userPhone);
            $stmt->bindParam(':userStatus', $userStatus);
            $stmt->bindParam(':otpKey', $otpKey);

            // Sorguyu çalıştırma
            $stmt->execute();
        }

        $sql = "CREATE TABLE IF NOT EXISTS tokens_passwords (
            ID INT(11) NOT NULL AUTO_INCREMENT,
            userID INT(11),
            token VARCHAR(255),
            PRIMARY KEY (ID)
            );";

        self::$connection->exec($sql);

    }

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

    public static function generateToken($length = 32)
    {
        // token'ın içerebileceği karakterleri belirleyin
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $token = '';

        // istenen uzunlukta bir döngü oluşturun
        for ($i = 0; $i < $length; $i++) {
            // rastgele bir karakter seçin
            $randomIndex = random_int(0, strlen($characters) - 1);
            $randomChar = $characters[$randomIndex];

            // token'a karakteri ekle
            $token .= $randomChar;
        }

        // token'ı geri döndürün
        return $token;
    }


    public static function convertMonthToTurkishCharacter($date)
    {
        $months = array(
            'January' => 'Ocak',
            'February' => 'Şubat',
            'March' => 'Mart',
            'April' => 'Nisan',
            'May' => 'Mayıs',
            'June' => 'Haziran',
            'July' => 'Temmuz',
            'August' => 'Ağustos',
            'September' => 'Eylül',
            'October' => 'Ekim',
            'November' => 'Kasım',
            'December' => 'Aralık',
            'Monday' => 'Pazartesi',
            'Tuesday' => 'Salı',
            'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe',
            'Friday' => 'Cuma',
            'Saturday' => 'Cumartesi',
            'Sunday' => 'Pazar',
            'Jan' => 'Oca',
            'Feb' => 'Şub',
            'Mar' => 'Mar',
            'Apr' => 'Nis',
            'Jun' => 'Haz',
            'Jul' => 'Tem',
            'Aug' => 'Ağu',
            'Sep' => 'Eyl',
            'Oct' => 'Eki',
            'Nov' => 'Kas',
            'Dec' => 'Ara'

        );
        return strtr($date, $months);
    }

    public static function seflink($val)
    {
        $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#', '?', '*', '!', '.', '(', ')');
        $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp', '', '', '', '', '', '');
        $string = strtolower(str_replace($find, $replace, $val));
        $string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $string = str_replace(' ', '-', $string);
        return $string;
    }

    public static function sendEmail($to, $subject, $body, $fromName, $fromMail)
    {


        $mail = new PHPMailer(true);
        $mailsettings = DB::table("settings")->where("ID", 1)->first();
        try {
            // Sunucu ayarları
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = $mailsettings->websiteMailHost;
            $mail->SMTPAuth = true;
            $mail->Username = $mailsettings->websiteMail;
            $mail->Password = $mailsettings->websitePassword;
            $mail->SMTPSecure = "SSL";
            $mail->Port = $mailsettings->websiteMailPort;

            // Alıcılar
            $mail->setFrom($fromMail, $fromName);
            $mail->addAddress($to);

            // İçerik
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;

            $mail->send();

            return true;
        } catch (Exception $e) {
            $errordata = (Object) ["type" => "302", "message" => "An error occurred while sending mail", "title" => "SMTP Error", "code" => $e->getMessage()];

            return self::viewError("connection", $errordata);
        }
    }

    public static function setCookie($name, $value, $day)
    {
        setcookie($name, $value, strtotime("+" . $day . " days"));
    }

    public static function removePhpExtension($url)
    {
        return preg_replace('/\.php$/', '', $url);
    }


    public static function go($url, $time = 0)
    {
        if ($time == 0) {
            header("Location: $url");
        } else {
            header("Refresh: $time; URL=$url");
        }
    }

    public static function comeBack($time = 0)
    {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = $_SERVER['HTTP_REFERER'];
            $referer = self::removePhpExtension($referer); // .php uzantısını kaldır
            if ($time == 0) {
                header("Location: $referer");
            } else {
                header("Refresh: $time; URL=$referer");
            }
        } else {
            echo "Referer header not found";
        }
    }


    public static function uploadFile($image, $target_directory)
    {
        $file_extension = pathinfo($image["name"], PATHINFO_EXTENSION);
        $new_file_name = time() . "_" . rand(100, 999) . '.' . $file_extension; // Generate a unique file name

        $target_folder = $target_directory;
        $target_file = $target_folder . $new_file_name;

        $allowed_file_types = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx", "txt", "svg");

        // Check file type
        if (!in_array($file_extension, $allowed_file_types)) {
            echo "You can only upload JPG, JPEG, PNG, GIF, PDF, DOC, SVG, DOCX, and TXT file types.";
            return false;
        }

        // Upload file
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            // If file uploaded successfully, save to database
            return $new_file_name;
        } else {
            echo "There was an error uploading the file.";
            return false;
        }
    }

    public static function deleteAllFilesExceptOne($folder_path, $filename)
    {
        $files = glob($folder_path . '*'); // Get all files in the folder
        foreach ($files as $file) {
            if (is_file($file) && basename($file) != $filename) { // Check if it's a file and not the specified file
                unlink($file); // Delete the file
                return true;
            } else {
                return false;
            }
        }
    }





}