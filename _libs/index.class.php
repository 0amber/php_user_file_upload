<?php
require_once('./_libs/Uibase.class.php');
require_once('./_libs/Auther.class.php');
  
/**
*
*indexクラス
*
*/
  
class Index extends Uibase
{
  
    public function doView()
    {
  
        $auth = new Auther;
        $auth->deleteExpiredFiles($this->configs['master']['expire']);
        $this->assign("cads", Cader::extractAll($this->configs));
        $this->display("index.tpl");
  
    }
  
}
  
?> 