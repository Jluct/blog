<?php
session_start();
include_once('/core/data/get/get.php');

class getMenu extends getDataBase
{
    private static $query = "SELECT menu_id,menu_title,menu_url from menu";
    public static function getDataMenu(){
      return parent::getData(self::$query);
    }
}