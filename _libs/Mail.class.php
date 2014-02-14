<?php
require_once ('./_libs/PHPMailer.class.php');
  


/**
*
*メール送信クラス
*
*/
  
class Mail
{
  const INTERNAL_ENCODING = 'UTF-8';
  const INTERNAL_LANGUAGE = 'japanese';
  const DEFAULT_MAIL_CHARSET = 'JIS';
  
  public function __construct() {
    //言語設定、内部エンコーディングを指定する
    mb_language(self::INTERNAL_LANGUAGE);
    mb_internal_encoding(self::INTERNAL_ENCODING);
  }
  
  
   public function Send($msg, $charset = 'iso-2022-jp', $encoding = '7bit') {
  
       
      //日本語添付メールを送る
      $mail = new PHPMailer();
  
      $mail->CharSet = $charset;
      $mail->Encoding = $encoding;
      $mail->AddAddress($msg['email_to']);
      $mail->From = $msg['email_from'];
  
      $mail->FromName = mb_encode_mimeheader(
                          mb_convert_encoding(
                            $msg['email_from_name']
                            , self::DEFAULT_MAIL_CHARSET
                            , self::INTERNAL_ENCODING
                          )
                        );
  
      $mail->Subject = mb_encode_mimeheader(
                         mb_convert_encoding(
                           $msg['subject']
                           , self::DEFAULT_MAIL_CHARSET
                           , self::INTERNAL_ENCODING
                         )
                       );
  
      $mail->Body  = mb_convert_encoding(
                         $msg['body']
                         , self::DEFAULT_MAIL_CHARSET
                         , self::INTERNAL_ENCODING
                     );
       
      if (!$mail->Send()){
        echo("メールが送信できませんでした。エラー:".$mail->ErrorInfo);
      }
   }

    public function createuploadMsg($config_mail, $name, $file_name)
    {
  
        $manageMsg['body'] = $name . "様から" . $file_name ."データがアップロードされました。";
        $manageMsg['subject'] = $config_mail['message_subject_manage'];
        $manageMsg['email_to'] = $config_mail['email_manage_receiver'];
        $manageMsg['email_from'] = $config_mail['email_manage_sender'];
        $manageMsg['email_from_name'] = $config_mail['email_manage_name'];
  
        return $manageMsg;
    }

}
  
  
?> 