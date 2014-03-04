<?php /* Smarty version Smarty-3.1.16, created on 2014-03-04 00:53:11
         compiled from ".\_templates\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6100530ef4f9666f43-17920223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8e083ce06179053d41727abc470241d1d0d7d6' => 
    array (
      0 => '.\\_templates\\upload.tpl',
      1 => 1393890787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6100530ef4f9666f43-17920223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ef4f96a18d8_83022136',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ef4f96a18d8_83022136')) {function content_530ef4f96a18d8_83022136($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_is_ua_with_osmb')) include 'C:\\xampp\\htdocs\\subconfiles\\_libs\\Smarty\\plugins\\modifier.is_ua_with_osmb.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<a href="" class="button big icon loop">更新</a>
<script src="./_templates/_js/jquery_min.js"></script>
<script src="./_templates/_js/dnd.js"></script>
<h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
様ファイルアップロード</h3>
<div id="dragandrophandler" style="margin-left:200px; padding:30px; text-align: center;">
	<p style="font-size:24px; font-weight:bold;">ここにファイルをドラッグアンドドロップ<br>もしくは
<?php if (smarty_modifier_is_ua_with_osmb("win_ie")) {?>
	<br>参照ボタンをクリックして下さい
<?php } else { ?>
	<br>ファイル選択ボタンをクリックして下さい
<?php }?>
	<br>※１データ最大転送量100MBまで<br>※データ名は半角英数字でおねがいします</p>
</div>
<div id="inputuploadimage" style="margin-left:200px; margin-bottom:15px;">
    <input type="file" multiple="multiple" name="uploadFiles" id="upload-input" />
    <input type="hidden" name="MAX_FILE_SIZE" value="400000" />
</div>
<p><a href="./index.php" class="button big icon log">一覧表示に戻る</a></p>
<p><a href="./uprecord.php" class="button big icon mail">送信履歴見る</a></p>
<p><a href="./logout.php" class="button danger big icon unlock">ログアウトする</a></p>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
