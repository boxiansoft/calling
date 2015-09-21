<?php
require_once("Config.Inc.User.php");

$sql = "select content from about where id=8";
$rst = $conn->Execute($sql);

$smarty->assign("service",$rst->fields["content"]);

$smarty->display("user/service.tpl");
?>