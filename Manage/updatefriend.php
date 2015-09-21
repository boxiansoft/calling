<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editfriend")
{
	$id = 0;
	$getID  = $_GET["id"];
	
	if($getID>0)
	{
		$id = $getID;
	}
	
	$sql = "select * from friends where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["orderby"] = $_POST["orderby"];
	$record["weburl"] = $_POST["weburl"];
	$record["webName"] = $_POST["webName"];
	
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
 


if($_GET['action']=="deletefriend")
{
	$id=$_GET['id'];
	$sql="delete from friends where id=$id";
	$rst = $conn->Execute($sql)or die("delete error");
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='".urldecode($_SERVER['HTTP_REFERER'])."';</script>";
	}
}
?>