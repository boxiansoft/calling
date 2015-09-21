<?php
require_once("../Config.Inc.php");
require_once("FCKediter.php");

$contactID = $_GET["contactID"];
$sql = "select * from about where id=$contactID";
$rst = $conn->Execute($sql);
$smarty->assign("contactID",$rst->fields["id"]);
createEditer('contactContent',$rst->fields["cnContent"]);
$smarty->assign("aboutTitle",$rst->fields["cnTitle"]);
$smarty->assign("aboutPic",$rst->fields["image"]);
$close = new close($rst,$conn);
$smarty->display("Admin/ContactUs.tpl");
?>