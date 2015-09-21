<?php
require_once("Admin.Config.Inc.php");
require_once("authority.php");
require_once("page.php");

if($_GET['action']=="delete")
{
	$id=$_GET['id'];
	$sql="delete from recharge where id=$id";
	$rst = $conn->Execute($sql)or die("delete error");
	
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script language='javascript'>alert('OK');</script>";
	}
}
else
{
	$currentPage = 1;
	$getPage = $_GET["page"];
	
	if(isset($getPage) && $getPage > 1)
	{
		$currentPage = $getPage;
	}
	
	$pageSize = 16;
	$sql = "select count(*) as sumCount from recharge";
	$rst = $conn->Execute($sql) or die ("select error");
	$recordTotal = $rst->fields["sumCount"];
	$totalPage = ceil($recordTotal / $pageSize);
	$sql = "select re.id,sc.email,sc.schoolName,sc.userName,sc.mobile, re.fee,re.add_time from recharge re left join school sc on re.school_email = sc.email order by re.add_time desc";
	$rst = $conn->SelectLimit($sql,$pageSize,($currentPage - 1) * $pageSize) or die ("SelectLimit error");
	
	$feeList = $rst->GetArray();
	$smarty->assign("feeList",$feeList);

}
$close = new Close($rst,$conn);

$smarty->assign("page",page("userlist.php",$currentPage,$totalPage));

$smarty->display("Admin/user/feelist.tpl");


?>