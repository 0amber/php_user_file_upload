<?php
session_start();
require_once('./_libs/Session.class.php');
require_once('./_libs/Auth.class.php');
require_once('./_libs/UIBase.class.php');
/**
*
*login コントローラ	
*
*/

$UIBaseObj = new UIBase();
$AuthObj = new Auth();



//セッションユーザ確認
if (isset($_SESSION['name']) && isset($_SESSION['passwd']) && isset($_SESSION['filedir'])) { 
	if($AuthObj->user($_SESSION['name'], $_SESSION['passwd'])) header('Location: index.php');
}

//ログイン
if (isset($_POST['name']) && isset($_POST['passwd'])) { 
	if ($user = $AuthObj->userLogin($_POST['name'], $_POST['passwd'])) {
		$SessionObj = new Session();
		$SessionObj->addUser($user);
		header('Location: index.php');
	} else {
		//入力エラー
		$error_login = 'error login';
		$UIBaseObj->assign("error_login", $error_login);
	}
}

$UIBaseObj->display("login.tpl");

?> 