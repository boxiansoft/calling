<?php
require_once("Admin.Config.Inc.php");

if($_GET['action'] == 'editer')
{
	$adminName = $_POST['adminName'];
	$adminPwd = $_POST['adminPwd'];
	
	if($adminPwd != '')
	{
		$adminPwd = md5($_POST['adminPwd']);
	}
	
	$ID = $_GET['adminID'];
	$sql = "";
	$adminID = 0;
	
	if($ID != '')
	{
		$adminID = $ID;
	}
	
	$sql = "select * from admin where id = $ID ";
	$rst = $conn->execute($sql);
	$record = array();
	$record["admin"] = $adminName;
	if($adminPwd != '')
	{
		$record["adpwd"] = $adminPwd;
	}
	
	if($adminID != 0)
	{
		$insert = $conn->getUpdateSQL($rst,$record,true,true);		
	}
	else
	{
		$insert = $conn->getInsertSQL($rst,$record,true,true);
	}
	
	$rst = $conn->execute($insert);	
	if($rst > 0)
	{
		echo "<script language='javascript'>alert('OK');window.location.href='AdminManage.php';</script>";
	}	
	$rst->close();
	$conn->close();	
}


if($_GET['action']=='deleteAdmin')
{
	$adminID=$_GET['adminID'];
	$sql="delete from admin where id=$adminID";
	$rst = $conn->Execute($sql);
	
	if($rst > 0)
	{
		echo "<script language='javascript'>alert('OK');window.location.href='AdminManage.php';</script>";
	}
	
	$rst->close();
	$conn->close();
}
?>