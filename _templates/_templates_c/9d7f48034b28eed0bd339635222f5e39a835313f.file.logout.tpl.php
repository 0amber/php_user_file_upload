<?php /* Smarty version Smarty-3.1.16, created on 2014-02-13 08:36:39
         compiled from ".\_templates\logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1789552fc7607d6b694-27031050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7f48034b28eed0bd339635222f5e39a835313f' => 
    array (
      0 => '.\\_templates\\logout.tpl',
      1 => 1392276837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789552fc7607d6b694-27031050',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fc7607d92797_26103453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fc7607d92797_26103453')) {function content_52fc7607d92797_26103453($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">

<p>ログアウトしました</p>


<a href="./login.php">ログインする</a>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
