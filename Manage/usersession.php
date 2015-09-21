<?php
session_start();

if($_SESSION['admin']=="")
{
echo "<script language='javascript'>alert('链接超时，请重新登录！');parent.location.href='login.php';</script>";
}
?>