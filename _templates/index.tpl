{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<div>
	<ul>
{foreach from=$files item=file}
		<li>{$file}</li>
{/foreach}
	</ul>
</div>
{include file="./_parts/footer.tpl"}
