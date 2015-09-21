<?php
require_once("../Config.Inc.php");
require_once("FCKediter.php");

$id = $_GET["id"];
$sql = "select * from system where id=$id";
$rst = $conn->Execute($sql);
$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("menu",$rst->fields["menu"]);
$smarty->assign("title",$rst->fields["title"]);
$smarty->assign("keywords",$rst->fields["keywords"]);
$smarty->assign("description",$rst->fields["description"]);
$close = new close($rst,$conn);
$smarty->display("Admin/system.tpl");
?>
