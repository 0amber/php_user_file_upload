{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<div id="main" style="min-height:150px; padding:50px;">
	<p style="color:blue;">{$logout_complete|default:''}</p>
	<p style="color:red;">{$error_login|default:''}</p>
	<form action="./login.php" method="post">
		<p>ユーザー名:<input name="name" type="text" size="40"></p>
		<p>パスワード:<input name="passwd" type="password" size="40"></p>
		<p><input type="submit" value="ログイン"></p>
	</form>
</div>
{include file="./_parts/footer.tpl"}
