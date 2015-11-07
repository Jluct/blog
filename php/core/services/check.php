<?
session_start();

final class checkClass
{

    public static function checkUserData($userData)
    {

        foreach($userData as $value){

            if (!is_string($value) && !is_numeric($value))die("Это не строка и не число!!!");

        }
    }

    public static function deleteSpace($array)
    {

        $out = array();

        foreach ($array as $key => $value) {
            $out[$key] = trim($value);
        }

        return $out;
    }

    public static function htmlTransform($array){

        $out = array();

        foreach ($array as $key => $value) {
            $out[$key] = htmlspecialchars($value);
        }

        return $out;
    }

    public static  function checkAll($array){

        self::checkUserData($array);
        $out = self::deleteSpace($array);
        $out = self::htmlTransform($out);

        return $out;
    }

}