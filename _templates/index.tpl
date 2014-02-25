{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<div id="main" style="text-align:left; padding-left:200px;">
	<h3>{$user.name}様ファイル一覧</h3>
	<div>
		<ul>
	{foreach from=$files item=file}
			<li><a download="{$file}" href="../_files/{$user.filedir}{$file}">{$file}</a></li>
	{/foreach}
		</ul>
	</div>
</div>
<p><a href="./upload.php">ファイルをアップロードする</a></p>
<p><a href="./logout.php">ログアウトする</a></p>

{include file="./_parts/footer.tpl"}
