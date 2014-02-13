<?php /* Smarty version Smarty-3.1.16, created on 2014-02-13 09:33:00
         compiled from ".\_templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2469252f9b8ede2cc41-38497001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1cf3d17916209ff14460027166304c37ee9e6d4' => 
    array (
      0 => '.\\_templates\\login.tpl',
      1 => 1392279926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2469252f9b8ede2cc41-38497001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f9b8edeb57e0_22819291',
  'variables' => 
  array (
    'login_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f9b8edeb57e0_22819291')) {function content_52f9b8edeb57e0_22819291($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">
	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['login_error']->value)===null||$tmp==='' ? '' : $tmp);?>

	<form action="./login.php" method="post">
		<p>ユーザー名:<input name="name" type="text" size="40"></p>
		<p>パスワード:<input name="passwd" type="text" size="40"></p>
		<p><input type="submit" value="ログイン"></p>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
