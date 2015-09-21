<?php
require_once('Admin.Config.Inc.php');

$id = 0;

if(isset($_GET["id"]))
{
	$id=$_GET['id'];
}
$sql="select * from flash where id=$id";
$rst = $conn->Execute($sql)or die("select error one");

$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("flash_order",$rst->fields["flash_order"]);
$smarty->assign("pic",$rst->fields["pic"]);

$sql = "select * from flash order by flash_order desc ";
$rst = $conn->SelectLimit($sql) or die("select error all");
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);

if(isset($_GET["action"]) && $_GET["action"]=="deleteflash")
{
	$id=$_GET["id"];
	$sql="delete from flash where id=$id";
	$rst = $conn->Execute($sql)or die("select error one");
	
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');window.location.href='addadv.php';</script>";
	}
}

$close=new Close($rst,$conn);
$smarty->display("Admin/addadv.tpl");
?>