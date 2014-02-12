
{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<div id="main">
	{$login_error|default:''}
	<form action="./login.php" method="post">
		<p>ユーザー名:<input name="name" type="text" size="40"></p>
		<p>パスワード:<input name="passwd" type="text" size="40"></p>
		<p><input type="submit" value="ログイン"></p>
	</form>
</div>
{include file="./_parts/footer.tpl"}
