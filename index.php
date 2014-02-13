<?php
session_start();
require_once('./_libs/File.class.php');
require_once('./_libs/Auth.class.php');
require_once('./_libs/UIBase.class.php');
/**
*
*indexクラス
*
*/
$UIBaseObj = new UIBase();
$AuthObj = new Auth();

//セッションユーザ確認
if (!isset($_SESSION['name']) || !isset($_SESSION['passwd']) || !isset($_SESSION['filedir'])) header('Location: login.php');
if(!($user = $AuthObj->userVerify($_SESSION['name'], $_SESSION['passwd'], $_SESSION['filedir']))) {
	header('Location: login.php');
} else {
//ユーザ別ファイル取得
	$FileObj = new File();	
	$UIBaseObj->assign("files", $FileObj->listUserfiles($user));
}

$UIBaseObj->display("index.tpl");
?> 