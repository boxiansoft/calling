<?php
require_once("Admin.Config.Inc.php");

$id = 0;

if(isset($_GET["id"]) && intval($_GET["id"],10)>0)
{
	$id = $_GET["id"];
}

$sql = "select * from school where id=$id";

$rst = $conn->Execute($sql)or die("select error");

$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("email",$rst->fields["email"]);
$smarty->assign("schoolName",$rst->fields["schoolName"]);
$smarty->assign("userName",$rst->fields["userName"]);
$smarty->assign("area",$rst->fields["area"]);
$smarty->assign("courseOne",$rst->fields["courseOne"]);
$smarty->assign("courseTwo",$rst->fields["courseTwo"]);
$smarty->assign("courseThree",$rst->fields["courseThree"]);
$smarty->assign("courseFour",$rst->fields["courseFour"]);
$smarty->assign("courseFive",$rst->fields["courseFive"]);
$smarty->assign("courseSix",$rst->fields["courseSix"]);
$smarty->assign("courseSeven",$rst->fields["courseSeven"]);
$smarty->assign("courseEight",$rst->fields["courseEight"]);
$smarty->assign("courseNine",$rst->fields["courseNine"]);

$close=new Close($rst,$conn);

$smarty->display("Admin/user/adduser.tpl");
?>