<?php /* Smarty version Smarty-3.1.16, created on 2014-02-27 09:19:05
         compiled from ".\_templates\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6100530ef4f9666f43-17920223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8e083ce06179053d41727abc470241d1d0d7d6' => 
    array (
      0 => '.\\_templates\\upload.tpl',
      1 => 1393482548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6100530ef4f9666f43-17920223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ef4f96a18d8_83022136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ef4f96a18d8_83022136')) {function content_530ef4f96a18d8_83022136($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<a href="" class="button big icon loop">更新</a>
<script src="./_templates/_js/jquery_min.js"></script>
<script src="./_templates/_js/dnd.js"></script>
<h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
様ファイルアップロード</h3>
<div id="dragandrophandler" style="margin-left:200px; padding:50px; text-align: center;">
    <p>ここにファイルをドラッグアンドドロップ<br>もしくは<br>ファイル選択ボタンをクリックして下さい<br>(１データ最大転送量2MBまで)
    </p>


</div>
<div id="inputuploadimage" style="margin-left:200px; margin-bottom:15px;">
    <input type="file" multiple="multiple" name="uploadFiles" id="upload-input" />
</div>
<p><a href="./index.php" class="button big icon log">一覧表示に戻る</a></p>
<p><a href="./logout.php" class="button big icon unlock">ログアウトする</a></p>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
