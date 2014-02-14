<?php
require_once('./_libs/Smarty/Smarty.class.php');
  
/**
*
*共通クラス
*
*/
  
class UIBase extends Smarty
{
  
    function __construct()
    {
        parent::__construct();
        $this->template_dir = "./_templates/";
        $this->compile_dir = "./_templates/_templates_c/";
        $this->debugging = false;
    }
  
  

}
  
?>server.key -out csr.pem -sha1