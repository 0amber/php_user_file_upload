<?php
  
/**
*
*認証クラス
*
*/
  
class Session
{
  

public $name;
public $passwd;



    //セッション追加
    public function addUser($user) {
        $_SESSION['name'] = $user['name'];
        $_SESSION['passwd'] = $user['passwd']; 
        $_SESSION['filedir'] = $user['filedir']; 


    }

    //セッション削除
    public function delete() {
        $_SESSION = array();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, "/");
    }
 


    // 入力値に不正なデータがないかなどをチェックする関数
    function checkInput($var) {
        if (is_array($var)) {
            return array_map('checkInput', $var);
        } else {
            if (get_magic_quotes_gpc()) { // magic_quotes_gpc対策
                $var = stripslashes($var);
            }

            if (preg_match('/\0/', $var)) { // NULLバイト攻撃対策
                die('不正な入力です。');
            }
            if (!mb_check_encoding($var, 'UTF-8')) {  // 文字エンコードの確認
                die('不正な入力です。');
            }
            return $var;
        }
    } 


    public function createHash($request_email)
    {
        $hash = sha1($request_email.microtime(true)); 
        return $hash;
    }
  
  
    public function createFile($request_files, $expire, $hash)
    {
        $date = date('Ymd');
        $auth_file = array();
        $auth_file['expire'] = $expire;
        $auth_file['files'] = $request_files;
        $file_name = $hash . '-' . $date  . '.txt';
        $file_path = dirname(__FILE__) . "/../_authers/$file_name";
        file_put_contents($file_path, serialize($auth_file));
    }
  
  
    public function checkHash($hash)
    {
        if ($handle = opendir(dirname(__FILE__) . "/../_authers/")) {
            while (false !== ($file = readdir($handle))) {
                if ($file != '.' && $file != '..') {
                $hash_file = preg_replace('/\-.+/', '',$file);
                    if ($hash_file == $hash) {
                        $match_file = $file;
                    }
                }
            }
        }
        closedir($handle);
        if (isset($match_file)) {
            return $match_file;
        } else { 
            return false;
        }
    }
  
  
    public function checkExpire($expire, $auth_file_name)
    {
        preg_match('/\-([0-9]{8})\./', $auth_file_name, $auth_file_exp);
        $auth_file_expire = $auth_file_exp['1'];
        $auth_expire_date = strtotime(date("Y-m-d", strtotime($auth_file_expire)) . " +$expire");
        if ($auth_expire_date > strtotime('now')) {
            return true;
        } else {
            return false;
        }
    }
  
  
    public function extractAuthfiles($auth_file)
    {
        $filea = file_get_contents(dirname(__FILE__) . "/../_authers/$auth_file", "r");
        $file = unserialize($filea);
        return $file;
    }
  
  
    public function deleteExpiredFiles($expire)
    {
        $handle = opendir(dirname(__FILE__) . "/../_authers/");
        while($file = readdir($handle)) {
            if ($file != '.' && $file != '..') {
  
                if ($this->checkExpire($expire, $file) == false) {
                    unlink(dirname(__FILE__) . "/../_authers/$file");
                }
            }
        }
        closedir($handle);
    }
}

?> 