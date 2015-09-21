<?php
require_once("Admin.Config.Inc.php");
require_once("page.php");


if($_GET['action'] == 'allDel')
{
	foreach($_REQUEST['selectid'] as $value)
	{
		$sql="delete from news where id=$value";		
		$rst = $conn->Execute($sql) or die("delete all error");
	}
}


$currentPage = 1;
$getPage = $_GET["page"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$pageSize = 16;
$sql = "select count(*) as sumCount from news";
$rst = $conn->Execute($sql) or die ("select error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$sql = "select news.id,class.title className,news.classID,news.title,date_format(news.addTime,'%Y-%m-%d') addTime from news left join class on class.id=news.classID where class.firstID=38 or class.id=46 order by news.classID asc,news.addTime desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$newsList = $rst->GetArray();
$smarty->assign("newsList",$newsList);

$close = new Close($rst,$conn);

$smarty->assign("page",page("ManageNews.php",$currentPage,$totalPage));

$smarty->display("Admin/ManageNews.tpl");


?>