
{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<a href="" class="button big icon loop">更新</a>
<script src="./_templates/_js/jquery_min.js"></script>
<script src="./_templates/_js/dnd.js"></script>
<h3>{$user.name}様ファイルアップロード</h3>
<div id="dragandrophandler" style="margin-left:200px; padding:30px; text-align: center;">
	<p style="font-size:24px; font-weight:bold;">ここにファイルをドラッグアンドドロップ<br>もしくは
{if  "win_ie"|is_ua_with_osmb }
	<br>参照ボタンをクリックして下さい
{else}
	<br>ファイル選択ボタンをクリックして下さい
{/if}
	<br>※１データ最大転送量100MBまで<br>※データ名は半角英数字でおねがいします</p>
</div>
<div id="inputuploadimage" style="margin-left:200px; margin-bottom:15px;">
    <input type="file" multiple="multiple" name="uploadFiles" id="upload-input" />
    <input type="hidden" name="MAX_FILE_SIZE" value="400000" />
</div>
<p><a href="./index.php" class="button big icon log">一覧表示に戻る</a></p>
<p><a href="./uprecord.php" class="button big icon mail">送信履歴見る</a></p>
<p><a href="./logout.php" class="button danger big icon unlock">ログアウトする</a></p>
{include file="./_parts/footer.tpl"}