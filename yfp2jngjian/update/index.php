<?php
define ( "IN_KEKE", TRUE );
include '../app_comm.php';
require S_ROOT . 'update/file/kppw.php';
require S_ROOT . 'update/DbUtilities.php';
	$DbUtilities = new DbUtilities ();
	$DbUtilities->dbUpdate ( $dbArr );
	foreach ($dbArr as $table=>$fields){
		$filepath = S_ROOT . 'update/sqldata/'.$table.'.php';
		if(file_exists($filepath)){
			require $filepath;
		} 
	}
	unset ( $dbArr );
	unset ( $DbUtilities );
	$file_obj = new keke_file_class();
	$file_obj->delete_files(S_ROOT."/data/data_cache/");
	$file_obj->delete_files(S_ROOT."/data/tpl_c/");
	header('Refresh: 3; url=../index.php?do=index');
	echo '升级成功...<br />';
	echo '页面跳转中...<br />';
