<?php
require_once("Admin.Config.Inc.php");

$id = 0;
$firstID=1;

if(isset($_GET["id"]))
{
	$id = $_GET["id"];
}

if(isset($_GET["firstID"]))
{
	$firstID=$_GET["firstID"];	
}


$sql = "select * from class where id=$id";
$rst = $conn->Execute($sql);
$smarty->assign("id",$rst->fields["id"]);

if(isset($rst->fields["firstID"]))
{
	$smarty->assign("firstID",$rst->fields["firstID"]);
}
else
{
	$smarty->assign("firstID",$firstID);
}

$smarty->assign("orderby",$rst->fields["orderby"]);
$smarty->assign("title",$rst->fields["title"]);

$sql = "select * from class where firstID=$firstID order by orderby desc";
$rst = $conn->SelectLimit($sql) or die("select error");
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);
$close=new Close($rst,$conn);
$smarty->display("Admin/FirstClass.tpl");
?>