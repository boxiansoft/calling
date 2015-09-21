<?php
session_start();
require_once("../Config.Inc.php");

$smarty->assign("IPAddress",getIP());
//$smarty->assign("userName",$_SESSION['userName']);

$smarty->display("user/top.tpl");
?>

<?php
function getIP() 
{ 
	global $ip; 
	if (getenv("HTTP_CLIENT_IP")) 
	$ip = getenv("HTTP_CLIENT_IP"); 
	else if(getenv("HTTP_X_FORWARDED_FOR")) 
	$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	else if(getenv("REMOTE_ADDR")) 
	$ip = getenv("REMOTE_ADDR"); 
	else $ip = "Unknow"; 
	return $ip; 
} 
?>