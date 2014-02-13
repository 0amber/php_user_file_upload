<?php /* Smarty version Smarty-3.1.16, created on 2014-02-13 09:43:05
         compiled from ".\_templates\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1408052fc836d555c97-87444118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b8e083ce06179053d41727abc470241d1d0d7d6' => 
    array (
      0 => '.\\_templates\\upload.tpl',
      1 => 1392280977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1408052fc836d555c97-87444118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fc836d555c90_34750848',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fc836d555c90_34750848')) {function content_52fc836d555c90_34750848($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="./_templates/_js/jquery_min.js"></script>
<script src="./_templates/_js/dnd.js"></script>
<h1><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
ファイルアップロード</h1>
<div id="dragandrophandler">
    <p>ここにファイルをドラッグアンドドロップしてください</p>
</div>
<div id="inputuploadimage">
    <input type="file" multiple="multiple" name="uploadFiles" id="upload-input" />
</div>
<p><a href="./index.php">一覧表示に戻る</a></p>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
