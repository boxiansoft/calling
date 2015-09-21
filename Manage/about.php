<?php
require_once("../Config.Inc.php");
require_once("FCKediter.php");

$id = $_GET["id"];
$sql = "select * from about where id=$id";
$rst = $conn->Execute($sql);
$smarty->assign("id",$rst->fields["id"]);
createEditer("content",$rst->fields["content"],"700");
$smarty->assign("title",$rst->fields["title"]);

$close = new close($rst,$conn);
$smarty->display("Admin/about.tpl");
?>