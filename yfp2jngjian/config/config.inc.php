<?php
error_reporting ( 0 );
define('ADMIN_UID','1');
define ( 'DBHOST', '121.41.118.51:3306');
define ( 'DBNAME', 'yfp_v2');
define ( 'DBUSER', 'root');
define ( 'DBPASS', 'yfp');
define('DBCHARSET','utf8');
define('CHARSET', 'utf-8');
define('DBTYPE','mysql');
define ( 'TABLEPRE', 'yfp_'); 
define('ENCODE_KEY','keke'); 
define('GZIP',TRUE ); 
define('KEKE_DEBUG', 0);    
define("TPL_CACHE",1);   
define('IS_CACHE',1);
define('CACHE_TYPE', 'file');  
define('ADMIN_DIRECTORY','admin');
define('COOKIE_DOMAIN',''); 
define ( 'COOKIE_PATH', '/KPPW/'); 
define('COOKIE_PRE', 'kekeWitkey' );
define('COOKIE_TTL', 0 ); 
define('OPEN_IM',false);
define('SESSION_MODULE','files');
define('SYS_START_TIME', time());
$random = explode(' ', microtime());
define("RANDOM_PARA", $random[0]);
define('KEE_IM_URL',"http://www.kee.im");
function_exists ( 'date_default_timezone_set' ) and date_default_timezone_set ( 'PRC' );
define('SMS_ACCOUNT',"");
define('SMS_PASSWD',"");
