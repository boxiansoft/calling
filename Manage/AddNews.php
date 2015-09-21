<?php
require_once('Admin.Config.Inc.php');
require_once("FCKediter.php");

$id = 0;
$classID=0;

if(isset($_GET["id"]))
{
	$id = $_GET["id"];
}

if(isset($_GET["classID"]))
{
	$classID=$_GET["classID"];
}

$sql = "select * from news where id=$id";

$rst = $conn->Execute($sql)or die("select error");


if(isset($rst->fields["classID"]))
{
	$smarty->assign("classID",$rst->fields["classID"]);
}
else
{
	$smarty->assign("classID",$classID);
}

$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("orderby",$rst->fields["orderby"]);
$smarty->assign("title",$rst->fields["title"]);
$smarty->assign("keywords",$rst->fields["keywords"]);
$smarty->assign("description",$rst->fields["description"]);
createEditer("content",$rst->fields["content"],800);

$sql = "select * from class where firstID=38 or id=46 order by orderby desc";
$rst = $conn->Execute($sql);
$classList = $rst->GetArray();
$smarty->assign("classList",$classList);

$close=new Close($rst,$conn);
$smarty->display("Admin/AddNews.tpl");
?>