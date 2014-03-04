<?php 
session_start();
require_once('./_libs/Mail.class.php');
require_once('./_libs/Config.class.php');
require_once('./_libs/File.class.php');


if(!isset($_FILES["file"])) echo "error: ファイルがありません";
//ファイルアップロード
$FileObj = new File();
$uploaddir = './_uploadfiles';

if (!($FileObj->upload($_FILES, $uploaddir, $_SESSION['filedir']))) echo "ファイル転送失敗";
if (!($FileObj->recordUpdate($_FILES['file']['name'], $_SESSION['id']))) echo "データアップロード失敗";

//ファイルアップ完了後、メール送信
$ConfObj = new Config();
$MailObj = new Mail(); 
$uploadMailMsg = $MailObj->createuploadMsg($ConfObj->extractMailsettings(), $_SESSION['name'], $_FILES["file"]["name"]);
if($MailObj->send($uploadMailMsg)){
    echo "sucess: 送信完了";
} else {
    //送信失敗の場合はエラー
    echo "error: 送信失敗";		
}

?>