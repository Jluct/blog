<?
session_start();
include_once('/../db_connect.php');
include_once('/../../services/check.php');

if ($_SESSION['user']) die('Yor authorisation!');

class openSession extends db_connect
{

    private static function user_autor($array)
    {
        $trueArray = parent::processingUserData($array);
        $trueArray = checkClass::checkAll($trueArray);

        $login = $trueArray["login"];
        $password = $trueArray["password"];

        if(!isset($login) || !isset($password))die('No data');


        $query = "SELECT user_id,user_login, user_password, user_status FROM  user WHERE user_login = '" . $login . "' AND user_password ='" . $password."'";
        $rezult = parent::connect()->query($query)->fetch_assoc();

        if ($rezult) {
            $_SESSION['user'] = $rezult;

            $out["user_login"] = $_SESSION['user']['user_login'];
            $out["user_status"] = $_SESSION['user']['user_status'];

            return $out;
        } else {
            die('No login or password');
        }
    }

    public static function openSession1($array){
        return self::user_autor($array);
    }
}

