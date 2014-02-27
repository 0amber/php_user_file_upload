<?php /* Smarty version Smarty-3.1.16, created on 2014-02-27 09:19:02
         compiled from ".\_templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10535530ef4f6f30690-84164762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7254bfc32e840cf4c306770db4fd923cb8b532fd' => 
    array (
      0 => '.\\_templates\\index.tpl',
      1 => 1393482488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10535530ef4f6f30690-84164762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ef4f7030923_72084395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ef4f7030923_72084395')) {function content_530ef4f7030923_72084395($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<a href="" class="button big icon loop">更新</a>
<div id="main" style="text-align:left; padding-left:200px;">
	<h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
様ファイル一覧</h3>
	<div>
	<?php if ($_smarty_tpl->tpl_vars['files']->value) {?>
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
	<?php } else { ?>
		<p>データがありません。</p>
	<?php }?>

	</div>
</div>
<p><a href="./upload.php" class="button big icon add">ファイルをアップロードする</a></p>
<p><a href="./logout.php" class="button big icon unlock">ログアウトする</a></p>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
