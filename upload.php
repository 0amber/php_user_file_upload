<?php
session_start();
require_once('./_libs/UIBase.class.php');
require_once('./_libs/Auth.class.php');
require_once('./_libs/File.class.php');
require_once('./_libs/Mail.class.php');
/**
*
*アップロードコントローラ
*
****/
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
    $UIBaseObj->assign("user", $user);
}

$UIBaseObj->display("upload.tpl");


var_dump($_FILES);

/*

if (!isset($request['auth'])) exit;
  
        $ObjAuth = new Auth;
  
        $auth_file_name = $ObjAuth->checkHash($request['auth']);
  
        if (($auth_file_name = $ObjAuth->checkHash($request['auth'])) == false) exit;
  
        $auth_files = $ObjAuth->extractAuthfiles($auth_file_name);
  
        if ($ObjAuth->checkExpire($auth_files['expire'], $auth_file_name) == false) {
            $this->display("error.tpl");
            exit;
        }
  
        if (isset($request['download'])) {
            $this->downloadCad($request['download']);
            exit;
        }
  
        $this->assign("cads_checked", File::extractChecked($this->configs, $auth_files['files']));
        $this->assign("auth", $request['auth']);
        $this->display("Upload.tpl");
  
  
  
    private function downloadFile($download) 
    {
        $file = dirname(__FILE__) . "/../_cad/$download";
        $file_name = "$download";
        $app_type = preg_replace('/.+\./', '',$file_name);
        $file_size = filesize($file);
        header('Content-Description: File Transfer'); 
        header ("Content-Disposition: attachment; filename=$file_name");
        header ("Content-Type: text/plain");
        header ("Content-Length: ".$file_size);
        header('Content-Transfer-Encoding: binary');
        ob_clean();
        flush();
        readfile($file);
    }
 */ 

  
?>
