<?php
session_start();

include_once('/core/data/get/get.php');
include_once('/core/services/check.php');

class getComment extends getDataBase
{
    public static function getDataComment($array){

        $query = 'SELECT comment_user,comment_date,comment_text,news_id FROM `comment` where news_id='.$array[0];
        return parent::getData($query);
    }
}


//'SELECT comment_user,comment_date,comment_text,news_id FROM `comment` where news_id='.$array[0];