{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<a href="" class="button big icon loop">更新</a>
<div id="main" style="text-align:left; padding-left:200px;">
	<h3>{$user.name}様ファイル一覧</h3>
	<div>
	{if $files}
		<ul>
		{foreach from=$files item=file}
			<li><a download="{$file}" href="../_files/{$user.filedir}{$file}">{$file}</a></li>
		{/foreach}
		</ul>
	{else}
		<p>データがありません。</p>
	{/if}

	</div>
</div>
<p><a href="./upload.php" class="button big icon add">ファイルをアップロードする</a></p>
<p><a href="./uprecord.php" class="button big icon mail">送信履歴見る</a></p>
<p><a href="./logout.php" class="button danger big icon unlock">ログアウトする</a></p>

{include file="./_parts/footer.tpl"}
