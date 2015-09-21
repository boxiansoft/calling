<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editerNews")
{
	$id = 0;
	$getID  = $_GET["ID"];
	
	if($getID > 0)
	{
		$id = $getID;
	}
	
	$sql = "select * from news where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["title"] = $_POST["title"];
	$record["orderby"] = $_POST["orderby"];
	
	if(isset($_GET["classID"]))
	{
		$record["classID"]=$_GET["classID"];
		$record["download"]=$_POST["download"];
	}
	else
	{
		$record["classID"]=$_POST["classID"];
	}
	$record["keywords"] = $_POST["keywords"];
	$record["description"] = $_POST["description"];
	$record["content"] = $_POST["content"];
	
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
 


if($_GET['action']=="deleteNews")
{
	$newsID=$_GET['newsID'];
	$sql="delete from news where id=$newsID";
	$rst = $conn->Execute($sql)or die("delete error");
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='ManageNews.php';</script>";
	}
}
?>