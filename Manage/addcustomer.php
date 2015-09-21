<?php
require_once('Admin.Config.Inc.php');

$id = 0;

if(isset($_GET["ID"]))
{
	$id = $_GET["ID"];
}

$sql = "select * from customer where id=$id";

$rst = $conn->Execute($sql)or die("select error");

$smarty->assign("id",$rst->fields["id"]);
$smarty->assign("customer_order",$rst->fields["customer_order"]);
$smarty->assign("customer_name",$rst->fields["customer_name"]);
$smarty->assign("url",$rst->fields["url"]);
$smarty->assign("pic",$rst->fields["pic"]);

$close=new Close($rst,$conn);
$smarty->display("Admin/addcustomer.tpl");
?>