<?php
require_once('Admin.Config.Inc.php');
require_once("FCKediter.php");

$id = 0;

if(isset($_GET["ID"]))
{
	$id = $_GET["ID"];
}

$sql = "select * from news where id=$id";
$rst = $conn->Execute($sql)or die("select error");

$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("title",$rst->fields["title"]);
$smarty->assign("keywords",$rst->fields["keywords"]);
$smarty->assign("description",$rst->fields["description"]);
createEditer("content",$rst->fields["content"],800);

$close=new Close($rst,$conn);
$smarty->display("Admin/zhaopin.tpl");
?>