<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editFirstClass")
{
	$id = 0;
	$getID  = $_GET["id"];
	
	if($getID > 0)
	{
		$id = $getID;
	}
	
	$sql = "select * from class where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["orderby"] = $_POST["orderby"];
	$record["firstID"] = $_GET["firstID"];
	$record["title"] = $_POST["title"];
	
	if($getID == 0)
	{
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
 
if($_GET['action']=="deleteFirstClass")
{
	$id=$_GET['id'];
	$sql="delete from class where id=$id";
	$rst = $conn->Execute($sql)or die("delete error");
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='".urldecode($_SERVER['HTTP_REFERER'])."';</script>";
	}
}

if($_GET["action"] == "editerservice")
{
	$id = 0;
	$getID  = $_GET["ID"];
	
	if($getID > 0)
	{
		$id = $getID;
	}
	
	$sql = "select * from service where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["service_order"] = $_POST["service_order"];
	$record["classID"]=$_POST["classID"];
	$record["keywords"] = $_POST["keywords"];
	$record["description"] = $_POST["description"];
	$record["content"] = $_POST["content"];
	
	if($getID == 0)
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
		$close = new close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='".urldecode($_SERVER['HTTP_REFERER'])."';</script>";
	}

}

if($_GET['action']=="deleteservice")
{
	$id=$_GET['ID'];
	$sql="delete from service where id=$id";
	$rst = $conn->Execute($sql)or die("delete error");
	
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='managerservice.php';</script>";
	}
}

?>