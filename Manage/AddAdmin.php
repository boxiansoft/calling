<?php
require_once('Admin.Config.Inc.php');

$sql="select id,admin from admin where id = ".$_GET['AdminID'];
$rst = $conn->Execute($sql) or die("error execute");
$smarty->assign('adminName',$rst->fields['admin']);
$smarty->assign('adminID',$rst->fields['id']);
$close = new close($rst,$conn);
$smarty->display('Admin/AddAdmin.tpl');
?>