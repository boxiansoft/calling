<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editflash")
{
	$id = 0;
	$getID  = $_GET["id"];
	
	if($getID>0)
	{
		$id = $getID;
	}
	
	$sql = "select * from flash where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["flash_order"] = $_POST["flash_order"];
	$record["pic"] = $_POST["pic"];
	
	if($id == 0)
	{
		$record["addTime"] = date('Y-m-d H:i:s',time());
		$update = $conn->getInsertSQL($rst,$record,true,true);
	}
	else
	{
		$update = $conn->getUpdateSQL($rst,$record,true,true);
	}
	
	if($conn->Execute($update))
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='".urldecode($_SERVER['HTTP_REFERER'])."';</script>";
	}
}
?>