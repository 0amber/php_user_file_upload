<?php
session_start();
require_once('./_libs/Session.class.php');
require_once('./_libs/Auth.class.php');
require_once('./_libs/DB.class.php');
require_once('./_libs/UIBase.class.php');
/**
*
*indexクラス
*
*/

$UIBaseObj = new UIBase();
$SessionObj = new Session();
if($SessionObj->verify($_SESSION))  {

	$AuthObj = new Auth();
	if ($user = $AuthObj->user($_SESSION['name'], $_SESSION['passwd'])) {
		$SessionObj->add($user);
		header('Location: index.php');
	} else {

	    $error_login = 'error login';
		$UIBaseObj->assign("error_login", $error_login);

	}

}
$UIBaseObj->display("login.tpl");

?> 