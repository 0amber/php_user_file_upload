<?php 
session_start();
require_once('./_libs/Mail.class.php');
require_once('./_libs/Config.class.php');



if(isset($_FILES["file"])) {

$output_dir = './_files';

    //Filter the file types , if you want.
    if ($_FILES["file"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "";
    } else {
        move_uploaded_file($_FILES["file"]["tmp_name"], $output_dir . $_SESSION['filedir'] . $_FILES["file"]["name"]);
  /*
-   echo $_FILES["file"]["tmp_name"];
-   echo "\r\n";
-   echo $output_dir . $_SESSION['filedir'] . $_FILES["file"]["name"];
-   */
        echo "Uploaded File :".$_FILES["file"]["name"];
  }
}

    //ファイルアップ完了後、メール送信
    $ConfObj = new Config();
    $MailObj = new Mail(); 
    $uploadMailMsg = $MailObj->createuploadMsg($ConfObj->extractMailsettings(), $_SESSION['name'], $_FILES["file"]["name"]);
    if (!$MailObj->send($uploadMailMsg)) {
        //送信失敗の場合はエラー
        echo "sucess: 送信にエラーがありました。";
    } else {
        echo "sucess: 送信完了";
    }
?>