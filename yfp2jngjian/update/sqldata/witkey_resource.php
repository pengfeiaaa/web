<?php
db_factory::execute("REPLACE INTO `".TABLEPRE."witkey_resource` VALUES ('219', '水印管理', 'index.php?do=watermark', '10', '10', null)");
db_factory::execute("REPLACE INTO `".TABLEPRE."witkey_resource_submenu` VALUES ('34', '增值工具', 'tool', '3', '1')");
db_factory::execute("REPLACE INTO `".TABLEPRE."witkey_resource` VALUES ('28', '模板管理', 'index.php?do=config&view=tpl', '12', '1', '')");
$queryRes  = db_factory::query("SELECT * FROM `".TABLEPRE."witkey_resource` WHERE resource_name = '支付接口'");
if(count($queryRes) >1){
	db_factory::execute("DELETE FROM `".TABLEPRE."witkey_resource` WHERE (`resource_id`='220')");
}