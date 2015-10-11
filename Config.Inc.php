<?php
header("Content-Type: text/html; charset=utf-8");
//定义服务器的绝对路径
define('BASE_PATH', dirname(__FILE__)); 

//定义Smarty目录的绝对路径
define('SMARTY_PATH','\Smarty\\');
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';
//实例化Smarty
$smarty = new Smarty;
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'\templates\\';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'\templates_c\\';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'\configs\\';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'\cache\\';
$smarty->caching=false; //是否启用缓存
$smarty -> left_delimiter = "<{"; //左定界符 
$smarty -> right_delimiter = "}>"; //右定界符 
$smarty->debugging = false;//调试控制台
$smarty->php_handling = SMARTY_PHP_ALLOW;

//调用ADODB
include_once(BASE_PATH."\adodb\adodb.inc.php");
$conn = ADONewConnection('mysql');
//连接地址、数据库用户名、数据库密码、数据库名称
$conn->PConnect('localhost','root','','callcenter') or die('连接错误');
$conn->execute('set names utf8');
$ADODB_FETCH = ADODB_FETCH_ASSOC;//指定按哪一种模式输出（表字段名、字段序列号），这里是指定按照字段名

class Close
{
	function __construct($rst,$conn)
	{
		$rst->close();
		$conn->close();
	}
}
?>
