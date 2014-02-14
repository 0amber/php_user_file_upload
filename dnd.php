<?php 
session_start();
require_once('./_libs/Mail.class.php');
require_once('./_libs/Config.class.php');


    //ファイルアップ完了後、メール送信
    $MailObj = new Mail();
    $ConfObj = new Config();
 
    $uploadMailMsg = $MailObj->createuploadMsg($ConfObj->extractMailsettings(), $_SESSION['name']);

    if (!$MailObj->send($uploadMailMsg)) {
        //送信失敗の場合はエラー
        echo "sucess: 送信にエラーがありました。";
    } else {
        echo "sucess: 送信完了";
    }
?>