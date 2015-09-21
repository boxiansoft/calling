<?php
require_once("Admin.Config.Inc.php");
require_once("page.php");


if($_GET['action'] == 'allDel')
{
	foreach($_REQUEST['selectid'] as $value)
	{
		$sql="delete from customer where id=$value";		
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
$sql = "select count(*) as sumCount from customer";
$rst = $conn->Execute($sql) or die ("select error");
$recordTotal = $rst->fields["sumCount"];
$totalPage = ceil($recordTotal / $pageSize);
$sql = "select id,customer_name,customer_order,pic,url,date_format(addTime,'%Y-%m-%d') addTime from customer order by customer_order desc,addTime desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
$newsList = $rst->GetArray();
$smarty->assign("newsList",$newsList);

$close = new Close($rst,$conn);

$smarty->assign("page",page("managercustomer.php",$currentPage,$totalPage));

$smarty->display("Admin/managercustomer.tpl");


?>