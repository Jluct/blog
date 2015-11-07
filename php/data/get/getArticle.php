<?php
session_start();
include_once('/core/data/get/get.php');

class getArticle extends getDataBase
{
    private static $query = "SELECT * FROM news";
    public static function getDataArticle(){
        return parent::getData(self::$query);
    }
}