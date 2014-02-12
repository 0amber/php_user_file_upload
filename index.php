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


$SessionObj = new Session();
if(!$SessionObj->verify($_SESSION)) header('Location: login.php');




$UIBaseObj = new UIBase();
$UIBaseObj->display("index.tpl");


?> 