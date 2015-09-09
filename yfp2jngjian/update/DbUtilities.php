<?php
class DbUtilities {
	private  $_searchPrefix;	
	private  $_replacePrefix;	
	private  $_arrTotalUseTables;	
	private  $_arrTotalUseTableFields; 
	function __construct($searchPrefix = TABLEPRE,$replacePrefix = '') {
		$this->_searchPrefix = $searchPrefix;
		$this->_replacePrefix = $replacePrefix;
	}
	function addTotalUseTables($table){
		$this->_arrTotalUseTables[] = $table;
	}
	function addTotalUseTableFields($table,$field){
		$this->_arrTotalUseTableFields[$table][] = $field;
	}
	function getTotalUseTables(){
		return $this->_arrTotalUseTables;
	}
	function getTotalUseTableFields(){
		return $this->_arrTotalUseTableFields;
	}
	function getTablesByDbName(){
		$tables = db_factory::query("SHOW TABLES");
		$arrTables = array();
		foreach ($tables as $k=>$v){
			$arrTables[$k]['table_name'] = $v['Tables_in_'.strtolower(DBNAME)];
		}
		return $arrTables;
	}
	function getFieldsByTable($TbName){
		$sql = "select * from information_schema.`COLUMNS` where TABLE_SCHEMA='".strtolower(DBNAME)."' and TABLE_NAME='".$TbName."'";
		return db_factory::query($sql);
	}
	function alterColumn($tablename,$arrFields){
		foreach ($arrFields as $k=>$v){
			$fieldname 		= trim($v['fields_name']); 		
			$fieldtype 		= trim($v['fields_type']);		
			$fieldextra 	= trim($v['fields_extra']);		
			$fielddefault 	= trim($v['fields_default']);	
			$fieldcomment	= trim($v['fields_comment']);	
			$col_info = db_factory::query("show COLUMNS FROM ".TABLEPRE.$tablename." WHERE Field='".$fieldname."' ");
			$col_info = $col_info[0];
			if($col_info){
				if($col_info['Type']!= $fieldtype ){
					$strSql = ' ALTER TABLE '.TABLEPRE.$tablename.' CHANGE';
					$fieldname and $strSql .= ' `'.$fieldname.'` ';	
					$fieldname and $strSql .= ' `'.$fieldname.'` ';	
					$fieldtype and $strSql .= ' '.$fieldtype.' ';	
					$fieldextra!='' and $strSql .= ' '.$fieldextra.' ';	
					$fielddefault!='' and $strSql .= " default '".$fielddefault."' ";	
					$fieldcomment!='' and $strSql .= " comment '".$fieldcomment."' ";	
					$res = db_factory::execute($strSql);
					if($res){
						$content = DBNAME.'库中'.$tablename.'表中修改'.$fieldname.'成功 --OK';
						$this->updateLog($content);
					}else{
						$content = DBNAME.'库中'.$tablename.'表中修改'.$fieldname.'失败 --fail';
						$this->updateLog($content);
					}
				}
				$this->addTotalUseTableFields($tablename, $fieldname);
			}else{
				$strSql = ' ALTER TABLE '.TABLEPRE.$tablename.' ADD';
				$fieldname and $strSql .= ' `'.$fieldname.'` ';	
				$fieldtype and $strSql .= ' '.$fieldtype.' ';	
				$fieldextra!='' and $strSql .= ' '.$fieldextra.' ';	
				$fielddefault!='' and $strSql .= " default '".$fielddefault."' ";	
				$fieldcomment!='' and $strSql .= " comment '".$fieldcomment."' ";	
				db_factory::execute($strSql);
				$col_info = array();
				$col_info = db_factory::query("show COLUMNS FROM ".TABLEPRE.$tablename." WHERE Field='".$fieldname."' ");
				$col_info = $col_info[0];
				if($col_info){
					$this->addTotalUseTableFields($tablename, $fieldname);
					$content = DBNAME.'库中'.$tablename.'表中新增'.$fieldname.'成功 --OK';
					$this->updateLog($content);
				}else{
					$content = DBNAME.'库中'.$tablename.'表中新增'.$fieldname.'失败 --fail';
					$this->updateLog($content);
				}
			}
		}
		$this->addTotalUseTables($tablename);
	}
	function createTable($tablename,$arrFields){
		$fields = '';
		$primaryKey = '';
		foreach ($arrFields as $k=>$v){
			$fieldname 		= trim($v['fields_name']); 		
			$fieldtype 		= trim($v['fields_type']);		
			$fieldextra 	= trim($v['fields_extra']);		
			$fielddefault 	= trim($v['fields_default']);	
			$fieldcomment	= trim($v['fields_comment']);	
			$fieldkey		= trim($v['fields_key']);		
			$fieldname and $fields .= ' `'.$fieldname.'` ';	
			$fieldtype and $fields .= ' '.$fieldtype.' ';	
			$fieldextra!='' and $fields .= ' '.$fieldextra.' ';	
			$fielddefault!='' and $fields .= " default '".$fielddefault."' ";	
			$fieldcomment!='' and $fields .= " comment '".$fieldcomment."' ";	
			$fields .=',';
			if($fieldkey!=''){
				if($fieldkey == 'PRI'){
					$primaryKey .="PRIMARY KEY (`".$fieldname."`),";
				}
				if($fieldkey == 'UNI'){
					$primaryKey .=" UNIQUE  (`".$fieldname."`),";
				}
				if($fieldkey == 'MUL'){
					$primaryKey .=" KEY `".$fieldname."` (`".$fieldname."`),";
				}
			}
		}
		if($primaryKey){
			$strCreateFields = $fields.trim($primaryKey,',');
		}else{
			$strCreateFields = trim($fields,',');
		}
		$strCreate = "CREATE TABLE `".TABLEPRE.$tablename."` (".$strCreateFields.") ENGINE=MyISAM DEFAULT CHARSET=utf8;";
		db_factory::execute($strCreate);
		$table_exist = db_factory::query("SHOW   TABLES   LIKE   '".TABLEPRE.$tablename."'");
		$table_exist = $table_exist[0]?true:false;
		if($table_exist){
			$this->addTotalUseTables($tablename);
			$fieldsList = $this->getFieldsByTable(TABLEPRE.$tablename);
			foreach ($fieldsList as $k=>$v){
				$this->addTotalUseTableFields($tablename, $v['COLUMN_NAME']);
			}
			$content = DBNAME.'库中创建'.$tablename.'成功 --OK';
			$this->updateLog($content);
		}else{
			$content = DBNAME.'库中创建'.$tablename.'失败 --fail';
			$this->updateLog($content);
		}
	}
	function updateLog($content){
		$fp=fopen(S_ROOT."data/updatelog",'a');
		fwrite($fp,date("Y-m-d H:i:s",time()).' '.$content."\r\n");
		fclose($fp);
	}
	function dbUpdate($dbArr){
		if($dbArr){
			foreach ($dbArr as $table=>$fields){
				$table_exist = db_factory::query("SHOW   TABLES   LIKE   '".TABLEPRE.$table."'");
				$table_exist = $table_exist[0]?true:false;
				if($table_exist){
					$this->alterColumn($table, $fields);
				}else{
					$content = DBNAME.'不存在表：'.$table;
					$this->updateLog($content);
					$this->createTable($table, $fields);
				}
			}
		}else{
			exit('缺少参考数据库文件....') ;
		}
	}
}
?>