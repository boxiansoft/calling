<?php
require_once('Admin.Config.Inc.php');
require_once("FCKediter.php");

$id = 0;
$classID=0;

if(isset($_GET["ID"]))
{
	$id = $_GET["ID"];
}

$sql = "select * from service where id=$id";

$rst = $conn->Execute($sql)or die("select error");

$smarty->assign("classID",$rst->fields["classID"]);
$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("service_order",$rst->fields["service_order"]);
$smarty->assign("keywords",$rst->fields["keywords"]);
$smarty->assign("description",$rst->fields["description"]);
createEditer("content",$rst->fields["content"],800);

$sql = "select * from class where firstID=2 order by orderby desc";
$rst = $conn->Execute($sql);
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);

$close=new Close($rst,$conn);
$smarty->display("Admin/addservice.tpl");
?>