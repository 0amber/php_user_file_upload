<?php
require_once('./_libs/DB.class.php');  
/**
*
*ファイルクラス
*
*/
  
class File Extends DB
{


    public function upload($files, $outputdir, $filedir) 
    {
        $fname = basename($files['file']['name']);
        $fname_sjis = mb_convert_encoding( $fname, 'CP932', 'utf-8');
        move_uploaded_file($files["file"]["tmp_name"], $outputdir . $filedir . $fname_sjis);
        $msg = "Uploaded File :".$files["file"]["name"];
        return $msg;
    }


    public function recordUpdate($file_name, $user_id)
    {
        $this->connect();
        $sql = sprintf("INSERT INTO uprecords (user_id, file) VALUES ('%s', '%s')",
                mysql_real_escape_string($user_id),
                mysql_real_escape_string($file_name)                
        );
        $result_flag = mysql_query($sql);
        if (!$result_flag) {
            die('INSERTクエリーが失敗しました。'.mysql_error());
        } else {
            return true;
        }
    }


    public function listUserfiles($user) 
    {
        $dir = './_files' . $user['filedir'];
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $filedir = '';
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != "..") {
                        $filedir[] = "$file";
                    }
                }
                closedir($dh);
            }
        }
    return $filedir;
    }


    public function listUserUprecords($user_id) 
    {
        $this->connect();
        $sql = sprintf('SELECT * FROM uprecords INNER JOIN users ON uprecords.user_id = users.id WHERE uprecords.user_id="%s" ORDER BY uprecords.id DESC LIMIT 100',
                mysql_real_escape_string($user_id)
        );
        if ($record = mysql_query($sql)) {
            $uprecords = array();  
            while ($uprecord = mysql_fetch_assoc($record)) {
            $uprecords[] = $uprecord;
            }
            return $uprecords;
        } else {
            die(mysql_error());
        }
    }
  
}
  
  
?>