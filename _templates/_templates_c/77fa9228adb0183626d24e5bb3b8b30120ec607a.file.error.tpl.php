<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 03:37:23
         compiled from ".\_templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26607530ff6638b4407-61569051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77fa9228adb0183626d24e5bb3b8b30120ec607a' => 
    array (
      0 => '.\\_templates\\error.tpl',
      1 => 1393474963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26607530ff6638b4407-61569051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530ff6638df398_00609211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530ff6638df398_00609211')) {function content_530ff6638df398_00609211($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./_parts/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("./_parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div>
<p>エラーが発生いたしました</p>
<p>もう一度処理していただくか、弊社へご連絡下さいませ</p>

<p><a href="./logout.php" class="button big icon unlock">ログアウトする</a></p>
<p><a href="./index.php"  class="button big icon log">一覧表示に戻る</a></p>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("./_parts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
