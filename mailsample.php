<?php
class Mail { 

  public function doView($request)
    {
  
        if (($err = Validater::checkErr($request)) !== true)  exit;
   
        $cads_checked = Cader::extractChecked($this->configs, $request['files']);
        $auth = new Auther;
        $request['hash'] = $auth->createHash($request['email']);
  
        $msgManage = $this->createManageMsg($request, $cads_checked, $this->configs['master']);
        $msgClient = $this->createClientMsg($request, $cads_checked, $this->configs['master']);
  
        $auth->createFile($request['files'], $this->configs['master']['expire'], $request['hash']);
        $mail = new Mailer;
        $mail->Send($msgManage);
        $mail->Send($msgClient);
        foreach ($cads_checked as $cadc) {
            foreach ($cadc['exts'] as $key => $val) {
                Configer::insertClient($request, $val);
            }
        }
        $this->display("finish.tpl");
    }
  
  
  
    public function createManageMsg($request, $cads_checked, $config_master)
    {
  
        $msg_file = $this->createFileMsg($cads_checked);
        $change_key = array("{%company%}", "{%section%}","{%person%}", "{%tel%}", "{%email%}", "{%files%}",);
        $new_key   = array($request['company'], $request['section'],$request['person'], $request['tel'], $request['email'], $msg_file);
        $manageMsg['body'] = str_replace($change_key, $new_key, $config_master['message_body_manage']);
        $manageMsg['subject'] = $config_master['message_subject_manage'];
        $manageMsg['email_to'] = $config_master['email_manage_receiver'];
        $manageMsg['email_from'] = $config_master['email_manage_sender'];
        $manageMsg['email_from_name'] = $config_master['email_manage_name'];
  
        return $manageMsg;
    }
  
  
    public function createClientMsg($request, $cads_checked, $config_master)
    {
        if (!isset($request)) {
        exit;
        }
  
        $salt = $config_master['salt'];
        $hash = $request['hash']; 
        $url = $config_master['url'] . "?auth=" . $hash;
        $msg_file = $this->createFileMsg($cads_checked);
        $change_key = array("{%person%}", "{%files%}", "{%url%}");
        $new_key   = array($request['person'], $msg_file, $url);
        $clientMsg['body'] = str_replace($change_key, $new_key, $config_master['message_body_client']);
        $clientMsg['subject'] = $config_master['message_subject_client'];
        $clientMsg['email_to'] = $request['email'];
        $clientMsg['email_from'] = $config_master['email_client_sender'];
        $clientMsg['email_from_name'] = $config_master['email_client_name'];
  
        return $clientMsg;
    }
  
      
    public function createFileMsg($cads_checked)
    {
        $msg_file = "";
        foreach ($cads_checked as $cadc) {
            $msg_file .= $cadc['label'] . implode(" ", $cadc['exts']) . "\r\n";
        }
  
        return $msg_file; 
    }
}