<?php
require_once "Session.php";
require_once "../Config.Inc.php";


$sql = "select * from system";
$rst = $conn->Execute($sql) or die("select error");
$smarty->assign('systemID',$rst->fields["systemID"]);
$smarty->assign('webName',$rst->fields["webName"]);
$smarty->assign('webKeyWords',$rst->fields["webKeyWords"]);
$smarty->assign("webDescription",$rst->fields["webDescription"]);
$rst->close();
$conn->close();
$smarty->display("Admin/SetSite.tpl");
?>