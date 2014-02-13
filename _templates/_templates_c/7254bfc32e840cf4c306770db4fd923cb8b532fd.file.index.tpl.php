<?php /* Smarty version Smarty-3.1.16, created on 2014-02-13 09:33:08
         compiled from ".\_templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131352f983473bb064-58031734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7254bfc32e840cf4c306770db4fd923cb8b532fd' => 
    array (
      0 => '.\\_templates\\index.tpl',
      1 => 1392280372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1131352f983473bb064-58031734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f983473f7f69_99043084',
  'variables' => 
  array (
    'user' => 0,
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f983473f7f69_99043084')) {function content_52f983473f7f69_99043084($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
様ファイル一覧</h3>

<div>
	<ul>
<?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
		<li><a download="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" href="../_files/<?php echo $_smarty_tpl->tpl_vars['user']->value['filedir'];?>
<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
</a></li>
<?php } ?>
	</ul>
</div>
<p><a href="./upload.php">ファイルをアップロードする</a></p>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
