<?php
require_once('./_libs/DB.class.php');  
  
/**
*
*認証クラス
*
*/
  
class Auth extends DB
{
    //ログイン認証  
    public function userLogin($post_name, $post_passwd) {

        $this->connect();
        $sql = sprintf('SELECT * FROM users WHERE name="%s" AND passwd="%s"',
                mysql_real_escape_string($post_name),
                mysql_real_escape_string($post_passwd)
        );
        $record = mysql_query($sql) or die(mysql_error());
        $user = mysql_fetch_assoc($record);
        return $user;
    }


    //管理者認証
    public function userVerify($session_name, $session_passwd, $session_filedir) {
        $this->connect();
        $sql = sprintf('SELECT * FROM users WHERE name="%s" AND passwd="%s" AND filedir="%s"',
                mysql_real_escape_string($session_name),
                mysql_real_escape_string($session_passwd),
                mysql_real_escape_string($session_filedir)                
        );
        $record = mysql_query($sql) or die(mysql_error());
        $user = mysql_fetch_assoc($record);
        return $user;

    }


}
/*








    public function extractAuthfiles($auth_file) {

        $sql = sprintf('SELECT * FROM userinfo_hon WHERE id="%s" AND mail="%s" AND password="%s"',
                mysql_real_escape_string($_SESSION['id']),
                mysql_real_escape_string($_SESSION['mail']),
                mysql_real_escape_string($_SESSION['password'])
        );
    $record = mysql_query($sql) or die(mysql_error());

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
  */
?> 