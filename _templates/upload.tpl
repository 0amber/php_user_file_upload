
{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<script src="./_templates/_js/jquery_min.js"></script>
<script src="./_templates/_js/dnd.js"></script>
<h1>{$user.name}ファイルアップロード</h1>
<div id="dragandrophandler">
    <p>ここにファイルをドラッグアンドドロップしてください</p>
</div>
<div id="inputuploadimage">
    <input type="file" multiple="multiple" name="uploadFiles" id="upload-input" />
</div>
<p><a href="./index.php">一覧表示に戻る</a></p>
{include file="./_parts/footer.tpl"}