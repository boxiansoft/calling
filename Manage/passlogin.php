<?php
$lifeTime =14400;
try   
{  
    session_start();  
    setcookie( session_name(), session_id(), time() + $lifeTime, "/" );  
}   
catch ( Exception $e )  
{  
    session_set_cookie_params( $lifeTime );  
    session_start();  
}  

session_register('Admin');

require_once("../Config.Inc.php");

$picCode = strtolower($_POST['picCode']);
$SafeCode = strtolower($_SESSION['SafeCode']);
if($picCode == $SafeCode)
{
	$adName=$_POST['adName'];
	$adPwd=md5($_POST['adPwd']);	
	$adIP=$_SERVER['REMOTE_ADDR'];
	$sql="select * from admin where admin='$adName' and adpwd='$adPwd'";
	$rst = $conn->Execute($sql) or die("execute error");
	
	if($rst->RecordCount() == 1)
	{
		$_SESSION['Admin'] = $adName;		
		$smarty->display('Admin/index.tpl');
	}
	else
	{
		echo "<script language='javascript'>alert('用户名或者密码错误');</script>";
		$smarty->display('Admin/login.tpl');
	}
}
else
{
		echo "<script language='javascript'>alert('验证码填写错误');</script>";
		$smarty->display('Admin/login.tpl');
}

?>
