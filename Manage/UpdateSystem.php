<?php 
require_once("Admin.Config.Inc.php");

if($_GET['action']=='system')
{
	$systemID = $_GET['systeID'];
	$title = $_POST['title'];
	$keywords = $_POST['keywords'];
	$description = $_POST['description'];
	$sql = "select * from system where id=$systemID";
	$rst = $conn->Execute($sql) or die ("select error");
	$record = array();
	$record["title"] = $title;
	$record["keywords"] = $keywords;
	$record["description"] = $description;
	$update = $conn->getUpdateSQL($rst,$record,true,true);
	
	if($conn->Execute($update) > 0)
	{
		echo "<script language='javascript'>alert('OK');window.location.href='".urldecode($_SERVER['HTTP_REFERER'])."';</script>";
	}
}


if($_GET['action']=='about')
{
	$content = $_POST["content"];	
	$id = $_GET["aboutID"];
	$sql = "select * from about where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["content"] = $content;
	$update = $conn->getUpdateSQL($rst,$record,true,true);	
	
	if($conn->Execute($update) > 0)
	{
		echo "<script language='javascript'>alert('OK');window.location.href='".urldecode($_SERVER['HTTP_REFERER'])."';</script>";
	}
}


?>

