<?php
session_start();
require_once("Config.Inc.php");
$picCode = strtolower($_POST['picCode']);
$SafeCode = strtolower($_SESSION['SafeCode']);

if($_GET["action"] == "present")
{
	if($picCode == $SafeCode)
	{
		$sql = "select * from present where id=0";
		$rst = $conn->Execute($sql);
		$record = array();
		$record["user_name"] = $_POST["userName"];
		$record["company_name"] = $_POST["companyName"];
		$record["mobile"] = $_POST["mobile"];
		$record["email"] = $_POST["email"];
		$record["friend_name"] = $_POST["friend_name"];
		$record["friend_mobile"] = $_POST["friend_mobile"];
		$record["friend_email"] = $_POST["friend_email"];
		$record["addTime"] =  date('Y-m-d H:i:s',time());
		
		$update = $conn->getInsertSQL($rst,$record,true,true);
		//echo $update;
		if($conn->Execute($update))
		{
			$close = new Close($rst,$conn);
			echo "<script language='javascript'>alert('保存成功');window.location.href='index.php';</script>";
		}
	}
	else
	{
		echo "<script language='javascript'>alert('验证码填写有误');window.location.href='present.php';</script>";
	}
}
?>