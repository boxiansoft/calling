<?php
require_once("Admin.Config.Inc.php");

if($_GET["action"] == "editerUser")
{
	$id = 0;
	
	if(isset($_GET["id"]) && intval($_GET["id"],10)>0)
	{
		$id = intval($_GET["id"],10);
	}
	
	$sql = "select * from school where id=$id";
	$rst = $conn->Execute($sql) or die("select error");
	$record = array();
	$record["email"] = $_POST["email"];
	
	if($_POST["pwd"] != null && $_POST["pwd"] != "")
	{
		$record["pwd"] = $_POST["pwd"];
	}
	
	$record["schoolName"] = $_POST["schoolName"];
	$record["mobile"] = $_POST["mobile"];
	$record["userName"] = $_POST["userName"];
	$record["area"] = $_POST["area"];
	$record["courseOne"] = $_POST["courseOne"];
	$record["courseTwo"] = $_POST["courseTwo"];
	$record["courseThree"] = $_POST["courseThree"];
	$record["courseFour"] = $_POST["courseFour"];
	$record["courseFive"] = $_POST["courseFive"];
	$record["courseSix"] = $_POST["courseSix"];
	$record["courseSeven"] = $_POST["courseSeven"];
	$record["courseEight"] = $_POST["courseEight"];
	$record["courseNine"] = $_POST["courseNine"];
	
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
		echo "<script language='javascript'>alert('OK');window.location.href='userlist.php';</script>";
	}
}
 


if($_GET['action']=="deleteUser")
{
	$id=$_GET['id'];
	$sql="delete from school where id=$id";
	$rst = $conn->Execute($sql)or die("delete error");
	
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='userlist.php';</script>";
	}
}

$close = new Close($rst,$conn);
?>