<?php
require_once("Config.Inc.User.php");

$email = $_SESSION['userName'];

if($_GET['action']=="update")
{
	$pwd = $_POST["pwd"];
	$oldPwd = $_POST['oldPwd'];
	
	$sql = "select pwd from school where email='$email'";
	$rst = $conn->Execute($sql);
	
    if($oldPwd == $rst->fields["pwd"])
	{
		$record = array();
		$record["pwd"] = $pwd;
		$record["addTime"] = date('Y-m-d H:i:s',time());		
		$update = $conn->getUpdateSQL($rst,$record,true,true);
		
		if($conn->Execute($update))
		{
			$close = new Close($rst,$conn);
			echo "<script type='text/javascript' language='javascript'>alert('修改成功，您的新密码是：".$pwd."');window.location.href='update_password.php';</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript' language='javascript'>alert('原始密码有误');window.location.href='update_password.php';</script>";
	}
}
$smarty->display("user/update_password.tpl");
?>