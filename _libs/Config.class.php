<?php
  
  
/**
*
*設定ファイルクラス
*
*/
  
class Config
{

    //デフォルト設定ファイル取出し
    public function extractDefalts()
    {
        $conf_defaults = parse_ini_file('./_configs/defaults.ini', true);
        return $conf_defaults;
    }
  
    //メール設定ファイル取出し
    public function extractMail()
    {
        $conf_mail_settings = parse_ini_file('./_configs/mailsettings.ini', true);
        return $conf_mail_settings;
    }
  
    //データベース設定ファイル取出し
    public function extractDBsettings()
    {
        $conf_DB_settings = parse_ini_file('./_configs/DBsettings.ini', true);
        return $conf_DB_settings;
    }
  
  
}
  
  
?>