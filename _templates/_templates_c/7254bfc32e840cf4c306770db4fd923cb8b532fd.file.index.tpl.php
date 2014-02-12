<?php /* Smarty version Smarty-3.1.16, created on 2014-02-11 02:56:23
         compiled from ".\_templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131352f983473bb064-58031734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7254bfc32e840cf4c306770db4fd923cb8b532fd' => 
    array (
      0 => '.\\_templates\\index.tpl',
      1 => 1392083472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1131352f983473bb064-58031734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conf_files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f983473f7f69_99043084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f983473f7f69_99043084')) {function content_52f983473f7f69_99043084($_smarty_tpl) {?><h1>index.phpのtemp</h1>

<h1>test conf_files.ini</h1>

<p>
 <?php echo $_smarty_tpl->tpl_vars['conf_files']->value['name'];?>
 </br>
 <?php echo $_smarty_tpl->tpl_vars['conf_files']->value['passwd'];?>
 </br>
 <?php echo $_smarty_tpl->tpl_vars['conf_files']->value['filedir'];?>
 </br>
<p>

<?php }} ?>
