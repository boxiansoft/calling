<?php
require_once("Admin.Config.Inc.php");
require_once("authority.php");
require_once("page.php");

if($_GET['action']=="delete")
{
	$id=$_GET['id'];
	$sql="delete from present where id=$id";
	$rst = $conn->Execute($sql)or die("delete error");
	
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');</script>";
	}
}

$currentPage = 1;
$getPage = $_GET["page"];

if(isset($getPage) && $getPage > 1)
{
	$currentPage = $getPage;
}

$pageSize = 16;
$sql = "select count(*) as sumCount from present";
$rst = $conn->Execute($sql) or die ("select error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$sql = "select * from present order by addTime desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");

$friendlist = $rst->GetArray();
$smarty->assign("friendlist",$friendlist);

$close = new Close($rst,$conn);

$smarty->assign("page",page("friendlist.php",$currentPage,$totalPage));

$smarty->display("Admin/user/friendlist.tpl");


?>