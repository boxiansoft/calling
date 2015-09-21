<?php
require_once("Config.Inc.User.php");
require_once("../Manage/page.php");
$email = $_SESSION["userName"];

$sql = "select * from coupon where school_email='$email'";
$rst = $conn->Execute($sql);
$smarty->assign("surplusCoupon",$rst->fields["surplus_coupon"]);
$smarty->assign("useCoupon",$rst->fields["use_coupon"]);
$smarty->assign("sumCoupon",$rst->fields["all_coupon"]);

$currentPage = 1;
$getPage = $_GET["page"];
$pageSize = 16;
$where = "from consume con left join coupon cou on cou.id=con.coupon_id
left join student stu on stu.id=con.stu_id where cou.school_email='$email'";
$sql = "select count(*) sum ";
$sql = $sql.$where;
$rst = $conn->Execute($sql) or die("select count error");
$recordTotal = $rst->fields["sum"];
$totalPage = ceil($recordTotal / $pageSize);

if(isset($getPage) && intval($getPage)>0)
{
	$currentPage = $getPage;
}

$sql = "select con.consume_num,stu.id,stu.stu_name,stu.parent_name,stu.mobile,stu.city,con.add_time ";
$sql = $sql.$where." order by con.add_time desc";
$rst = $conn->SelectLimit($sql,$pageSize,($currentPage-1)*$pageSize) or die ("select limit error");
$couponList = $rst->GetArray();
$smarty->assign("couponList",$couponList);
$close = new Close($rst,$conn);
$smarty->assign("page",page("coupon.php",$currentPage,$totalPage));

$smarty->display("user/coupon.tpl");
?>