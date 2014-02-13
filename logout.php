<?php
session_start();
require_once('./_libs/Session.class.php');
require_once('./_libs/UIBase.class.php');
/**
*
*ログアウト コントローラ	
*
*/

$UIBaseObj = new UIBase();
$SessionObj = new Session();
$SessionObj->delete();



$UIBaseObj->display("logout.tpl");

?> 