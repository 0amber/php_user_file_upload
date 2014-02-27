<?php /* Smarty version Smarty-3.1.16, created on 2014-02-27 09:17:30
         compiled from ".\_templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9035530ef49abd3f74-02334498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1cf3d17916209ff14460027166304c37ee9e6d4' => 
    array (
      0 => '.\\_templates\\login.tpl',
      1 => 1393318051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9035530ef49abd3f74-02334498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logout_complete' => 0,
    'error_login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ef49ac58c94_58873578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ef49ac58c94_58873578')) {function content_530ef49ac58c94_58873578($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main" style="min-height:150px; padding:50px;">
	<p style="color:blue;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['logout_complete']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>
	<p style="color:red;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_login']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>
	<form action="./login.php" method="post">
		<p>ユーザー名:<input name="name" type="text" size="40"></p>
		<p>パスワード:<input name="passwd" type="password" size="40"></p>
		<p><input type="submit" value="ログイン"></p>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
