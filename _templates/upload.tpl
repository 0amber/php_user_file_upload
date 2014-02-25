
{include file="./_parts/head.tpl"}
{include file="./_parts/header.tpl"}
<script src="./_templates/_js/jquery_min.js"></script>
<script src="./_templates/_js/dnd.js"></script>
<h3>{$user.name}様ファイルアップロード</h3>
<div id="dragandrophandler" style="margin-left:200px; padding:50px; text-align: center;">
    <p>ここにファイルをドラッグアンドドロップ<br>もしくは<br>以下参照ボタンをクリックしてください</p>


</div>
<div id="inputuploadimage" style="margin-left:200px; margin-bottom:15px;">
    <input type="file" multiple="multiple" name="uploadFiles" id="upload-input" />
</div>
<p><a href="./index.php">一覧表示に戻る</a></p>
<p><a href="./logout.php">ログアウトする</a></p>
{include file="./_parts/footer.tpl"}