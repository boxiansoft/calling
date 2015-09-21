<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	font-family: 宋体;
}
a {
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #FF3300;
}
a:active {
	text-decoration: none;
	color: #333333;
}
-->
</style>
</head>
<body>
  <table width="95%" border="0" align="center" cellpadding="8" cellspacing="1" bgcolor="#003399">
    <tr>
      <td bgcolor="#F1F5F8"><b> </b> 
 管理员名：<font color="#FF0000"><?php echo $_SESSION['Admin']?></font>


</td>
    </tr>
</table>

</body>
</html>
