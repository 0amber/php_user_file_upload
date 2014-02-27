<?php
  
/**
*
*ファイルクラス
*
*/
  
class File
{


    public function upload($files, $outputdir, $filedir) 
    {
        move_uploaded_file($files["file"]["tmp_name"], $outputdir . $filedir . $files["file"]["name"]);
        $msg = "Uploaded File :".$files["file"]["name"];
        return $msg;
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


  
}
  
  
?>