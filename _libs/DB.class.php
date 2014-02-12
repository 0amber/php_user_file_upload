<?php
require_once('./_libs/Config.class.php');  
/**
*
*データベースクラス
*
*@ $config[host] 
*
*
*/
  
class DB
{
     //接続
    public function connect() {

        $confObj = new Config();
        $DBsettings = $confObj->extractDBsettings();
        mysql_connect($DBsettings['host'], $DBsettings['user'], $DBsettings['passwd']) or die(mysql_error());
        mysql_select_db($DBsettings['dbname']);
        mysql_query('SET NAMES UTF8'); 

    }

}

?>