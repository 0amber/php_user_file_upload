<?php
  
/**
*
*ファイルクラス
*
*/
  
class File
{
  
/*
    public function listUserfiles($user) 
    {
        $dir = dirname(__FILE__) . '../_files' . $user['filedir'];
        $dir_userfiles = scandir($dir);
    return $dir_userfiles;
    }
*/

    public function listUserfiles($user) 
    {
        $dir = './_files' . $user['filedir'];
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
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




    public function extractAll($config)
    {
        foreach ($config['files'] as $key => $val) {
            $res_dir = opendir( './_cad' );
            while( $file = readdir( $res_dir )) {
                if ($file != '.' && $file != '..'){
                    $file_name = preg_replace('/^(.*)\.(.*)$/', '$1', $file);
                    $file_ext = preg_replace('/^(.*)\.(.*)$/', '$2', $file);
                    if ($file_name == $key) {
                        $file_names[$file_name]['exts'][$file_ext] = $file;
                        $file_names[$file_name]['label'] = $val;
                    }
                }
            }
       }
       closedir( $res_dir );
       return $file_names;
    }
  
  
    public function extractChecked($config, $files)
    {
  
        $cads = Cader::extractAll($config);
        $selected_files = array();
        foreach($files as $f) {
            $idx = preg_replace('/^(.*)\.(.*)$/', '$1', $f);
            $ext = preg_replace('/^(.*)\.(.*)$/', '$2', $f);
            $label = $cads[$idx]['label'];
            if (!isset($selected_files[$label])) {
                $selected_files[$label] = array('label' => $label, 'exts' => array("$ext" => $f));
            } else {
                $selected_files[$label]['label'] = $label;
                $selected_files[$label]['exts'][$ext] = $f;
            }
        }
        return $selected_files;
  
    }
  
  
}
  
  
?>