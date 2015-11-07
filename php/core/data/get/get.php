<?
session_start();
include_once('/../db_connect.php');

class getDataBase extends db_connect
{
    private static function aaa($query)
    {
        parent::connect()->query("SET NAMES 'utf8'");
        parent::connect()->query("SET CHARACTER SET 'utf8'");
        parent::connect()->query("SET SESSION collation_connection = 'utf8_general_ci'");
        parent::connect()->query('SET NAMES utf8 COLLATE utf8_general_ci');
        $out = parent::connect()->query($query);
        return $out;
    }

    protected static function getData($query)
    {
        $out=array();
        foreach (self::aaa($query) as $key => $value) {
            $out[$key] = $value;
        }
        parent::connect()->close();
        return $out;
    }
}