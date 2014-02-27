<?php 
session_start();
require_once('./_libs/Mail.class.php');
require_once('./_libs/Config.class.php');
require_once('./_libs/File.class.php');



if(!isset($_FILES["file"])) header('Location: error.php');
//ファイルアップロード
$FileObj = new File();
$outputdir = './_files';
if (!$FileObj->upload($_FILES, $outputdir, $_SESSION['filedir'])) header('Location: error.php');

//ファイルアップ完了後、メール送信
$ConfObj = new Config();
$MailObj = new Mail(); 
$uploadMailMsg = $MailObj->createuploadMsg($ConfObj->extractMailsettings(), $_SESSION['name'], $_FILES["file"]["name"]);
var_dump($MailObj->send($uploadMailMsg));
/*
if (!$MailObj->send($uploadMailMsg)) {
    //送信失敗の場合はエラー
        header('Location: error.php');
} else {
        echo "sucess: 送信完了";
}
*/

?>