/*******************************
*ユーザーファイルアップロードシステム
*version 0.0.1
*
*******************************/

1-1 ファイル構成


/*******************************
*ファイル構成
*各ファイルの中に空のindex.htmlを埋め込むとする。
*******************************/

subconfiles/

	index.php /
	login.php
	upload.php
	error.php
       dnd.php 

	_config/
		defaults.ini
		mailsettings.ini
		DBsettings.ini

	_templates/
		index.tpl
		login.tpl
		upload.tpl
		error.tpl
		_parts/
			head.tpl
			header.tpl
			footer.tpl

	_libs/
		Auth.class.php
		Config.class.php
		DB.class.php
		Mail.class.php
		File.class.php
		PHPMailer.class.php
		UIBase.class.php
		_Smarty/
			Smarty.class.php
			SmartyBC.class.php
			debug.tpl
		plugins/
			各種プラグイン
		sysplugins/
			各種システムプラグイン

	_files/
		ユーザ別ファイル