<?php
require_once('Admin.Config.Inc.php');
require_once("FCKediter.php");
$id = 0;

if(isset($_GET["id"]))
{
	$id=$_GET['id'];
}
$sql="select * from friends where id=$id";
$rst = $conn->Execute($sql)or die("select error one");

$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("orderby",$rst->fields["orderby"]);
$smarty->assign("weburl",$rst->fields["weburl"]);
$smarty->assign("webName",$rst->fields["webName"]);

$sql = "select * from friends order by orderby desc ";
$rst = $conn->SelectLimit($sql) or die("select error all");
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);

if(isset($_GET["action"]) && $_GET["action"]=="deletefriend")
{
	$id=$_GET["id"];
	$sql="delete from friends where id=$id";
	$rst = $conn->Execute($sql)or die("select error one");
	
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='addfriend.php';</script>";
	}
}

$close=new Close($rst,$conn);
$smarty->display("Admin/addfriend.tpl");
?>