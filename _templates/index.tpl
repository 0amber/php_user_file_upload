{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<div>
	<ul>
{foreach from=$files item=file}
		<li>{$file} url: <a href="{$smarty.server.SERVER_NAME}{$file}">click me</a></li>
{/foreach}
	</ul>
</div>
{include file="./_parts/footer.tpl"}
