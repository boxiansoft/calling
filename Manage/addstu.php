<?php
require_once("Admin.Config.Inc.php");

$sql = "select id,area_name from area where parent_id<>0";
$areaList = $conn->GetArray($sql);
$smarty->assign("areaList",$areaList);

$sql = "select id,train_type from course where parent_id=0";
$bigList = $conn->GetArray($sql);
$smarty->assign("bigList",$bigList);

$sql = "select id,train_type,parent_id from course where parent_id<>0";
$smallList = $conn->GetArray($sql);
$smarty->assign("smallList",$smallList);


$id = 0;

if(isset($_GET["id"]) && intval($_GET["id"],10)>0)
{
	$id = $_GET["id"];
}

$sql = "select * from student where id=$id";

$rst = $conn->Execute($sql)or die("select error");

$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("stu_name",$rst->fields["stu_name"]);
$smarty->assign("stu_sex",$rst->fields["stu_sex"]);
$smarty->assign("stu_birthday",$rst->fields["stu_birthday"]);
$smarty->assign("parent_type",$rst->fields["parent_type"]);
$smarty->assign("parent_name",$rst->fields["parent_name"]);
$smarty->assign("mobile",$rst->fields["mobile"]);
$smarty->assign("email",$rst->fields["email"]);
$smarty->assign("area",$rst->fields["city"]);
$smarty->assign("address",$rst->fields["address"]);
$smarty->assign("postal",$rst->fields["postal"]);
$smarty->assign("office_code",$rst->fields["office_code"]);
$smarty->assign("office_tel",$rst->fields["office_tel"]);
$smarty->assign("office_ext",$rst->fields["office_ext"]);
$smarty->assign("home_code",$rst->fields["home_code"]);
$smarty->assign("home_tel",$rst->fields["home_tel"]);
$smarty->assign("home_ext",$rst->fields["home_ext"]);

$courseSelectList = $rst->fields["courseOne"].",".$rst->fields["courseTwo"].",".$rst->fields["courseThree"].",".$rst->fields["courseFour"].",".$rst->fields["courseFive"].",".$rst->fields["courseSix"].",".$rst->fields["courseSeven"].",".$rst->fields["courseEight"].",".$rst->fields["courseNine"];
$smarty->assign("courseSelectList",split(",",$courseSelectList));


$close=new Close($rst,$conn);

$smarty->display("Admin/user/addstu.tpl");
?>