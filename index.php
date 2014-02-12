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
if (isset($_SESSION['name']) && isset($_SESSION['passwd'])) { 
	if($AuthObj->user($_SESSION['name'], $_SESSION['passwd'])) {
		if($AuthObj->admin($_SESSION['name'], $_SESSION['passwd']))


		}
	}
}


$UIBaseObj = new UIBase();
$UIBaseObj->display("index.tpl");


?> 