<?php
require_once("Config.Inc.User.php");
require_once("../Manage/page.php");
$email = $_SESSION["userName"];
$currentPage = 1;
$getPage = $_GET["page"];
$pageSize = 16;
$sql = "select count(*) sum from recharge where school_email='$email'";
$rst = $conn->Execute($sql) or die("select count error");
$recordTotal = $rst->fields["sum"];
$totalPage = ceil($recordTotal / $pageSize);

if(isset($getPage) && intval($getPage)>0)
{
	$currentPage = $getPage;
}

$sql = "select fee,school_email,add_time from recharge where school_email='$email' order by add_time desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage-1)*$pageSize) or die ("select limit error");
$rechargeList = $rst->GetArray();
$smarty->assign("rechargeList",$rechargeList);
$close = new Close($rst,$conn);
$smarty->assign("page",page("recharge.php",$currentPage,$totalPage));

$smarty->display("user/recharge.tpl");
?>