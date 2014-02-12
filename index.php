<?php
session_start();
require_once('./_libs/Session.class.php');
require_once('./_libs/Config.class.php');
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
if (!isset($_SESSION['name']) || !isset($_SESSION['passwd'])) header('Location: index.php');
if($AuthObj->user($_SESSION['name'], $_SESSION['passwd'])) {
		//管理者確認
		if($AuthObj->admin($_SESSION['name'], $_SESSION['passwd'])) {
			
	}
}

$UIBaseObj->display("index.tpl");


?> 