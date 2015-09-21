<?php
require_once("Config.Inc.User.php");
$id=$_GET["id"];
$sql = "select * from student where id=$id";
$rst = $conn->Execute($sql);
$content = "<div class='popList'>";
$content = $content."<div class='popListLeft'>";
$content = $content."<ul><li class='popListTitle'>手机：</li><li>".$rst->fields["mobile"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>家长姓名：</li><li>".$rst->fields["parent_name"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>家长称呼：</li><li>".$rst->fields["parent_type"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>住宅电话：</li><li>".$rst->fields["telphone"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>电子邮件地址：</li><li>".$rst->fields["email"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>市：</li><li>".$rst->fields["province"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>区县：</li><li>".$rst->fields["city"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>邮政编码：</li><li>".$rst->fields["postal"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>办公室区号：</li><li>".$rst->fields["office_code"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>办公室电话：</li><li>".$rst->fields["office_tel"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>办公室分机：</li><li>".$rst->fields["office_ext"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>住宅区号：</li><li>".$rst->fields["home_code"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>住宅分机：</li><li>".$rst->fields["home_ext"]."</li></ul>";
$content = $content."</div>";
$content = $content."<div class='popListRight'>";
$content = $content."<ul><li class='popListTitle'>小朋友姓名：</li><li>".$rst->fields["stu_name"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>小朋友性别：</li><li>".$rst->fields["stu_sex"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>小朋友出生日期：</li><li>".$rst->fields["stu_birthday"]."</li></ul>";
$content = $content."<ul><li class='popListTitle'>地址：</li><li>".$rst->fields["address"]."</li></ul>";
if(strlen($rst->fields["courseOne"])>0) $content = $content."<ul><li class='popListTitle'>早教中心：</li><li>".$rst->fields["courseOne"]."</li></ul>";
if(strlen($rst->fields["courseTwo"])>0) $content = $content."<ul><li class='popListTitle'>少儿外语：</li><li>".$rst->fields["courseTwo"]."</li></ul>";
if(strlen($rst->fields["courseThree"])>0) $content = $content."<ul><li class='popListTitle'>少儿才艺：</li><li>".$rst->fields["courseThree"]."</li></ul>";
if(strlen($rst->fields["courseFour"])>0) $content = $content."<ul><li class='popListTitle'>少儿舞蹈：</li><li>".$rst->fields["courseFour"]."</li></ul>";
if(strlen($rst->fields["courseFive"])>0) $content = $content."<ul><li class='popListTitle'>少儿音乐：</li><li>".$rst->fields["courseFive"]."</li></ul>";
if(strlen($rst->fields["courseSix"])>0) $content = $content."<ul><li class='popListTitle'>少儿体育：</li><li>".$rst->fields["courseSix"]."</li></ul>";
if(strlen($rst->fields["courseSeven"])>0) $content = $content."<ul><li class='popListTitle'>小学教育：</li><li>".$rst->fields["courseSeven"]."</li></ul>";
if(strlen($rst->fields["courseEight"])>0) $content = $content."<ul><li class='popListTitle'>中学教育：</li><li>".$rst->fields["courseEight"]."</li></ul>";
if(strlen($rst->fields["courseNine"])>0) $content = $content."<ul><li class='popListTitle'>其他：</li><li>".$rst->fields["courseNine"]."</li></ul>";
$content = $content."</div>";




$content = $content."</div>";
echo $content;
?>