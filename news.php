<?php
require_once("Config.Inc.php");
require_once("manage/page.php");
require_once("common/menu.php");

$classID = 10;

if(isset($_GET['classID']) && intval($_GET['classID'],10)>0)
{
	$classID = $_GET['classID'];
}

$sql = "select title from class where id = $classID";
$rst = $conn->Execute($sql);
$smarty->assign("newsTitle",$rst->fields["title"]);

$sqlCount = "select count(*) as sumCount from news where id<>1 and classID=$classID";
$sql = "select n.id,n.title from news n  where n.id<>1 and n.classID=$classID";
$pageUrl='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 

$pageSize = 15;
$currentPage = 1;
$getPage = $_GET["page"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$sql=$sql." order by n.orderby desc,n.addTime desc";
$rst = $conn->Execute($sqlCount) or die ("selectClass error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$newsList = $rst->GetArray();
$smarty->assign("newsList",$newsList);
$smarty->assign("page",page($pageUrl,$currentPage,$totalPage));
$smarty->assign("currentPage",$currentPage);
$smarty->assign("totalPage",$totalPage);

$smarty->display("news.tpl");
?>