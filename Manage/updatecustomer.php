<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editercustomer")
{
	$id = 0;
	$getID  = $_GET["ID"];
	
	if($getID > 0)
	{
		$id = $getID;
	}
	
	$sql = "select * from customer where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["customer_name"] = $_POST["customer_name"];
	$record["customer_order"] = $_POST["customer_order"];
	$record["url"] = $_POST["url"];
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
		echo "<script language='javascript'>alert('OK');window.location.href='managercustomer.php';</script>";
	}
}
 


if($_GET['action']=="deletecustomer")
{
	$ID=$_GET['ID'];
	$sql="delete from customer where id=$ID";
	$rst = $conn->Execute($sql)or die("delete error");
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='managercustomer.php';</script>";
	}
}
?>