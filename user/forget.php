<?php
$lifeTime =14400;
try   
{  
    session_start();  
    setcookie( session_name(), session_id(), time() + $lifeTime, "/" );  
}   
catch ( Exception $e )  
{  
    session_set_cookie_params( $lifeTime );  
    session_start();  
}  

require_once("../Config.Inc.php");

$picCode = strtolower($_POST['picCode']);
$SafeCode = strtolower($_SESSION['SafeCode']);

if($_GET['action']=="edit")
{
	if($picCode == $SafeCode)
	{
		$email = $_POST["email"];
		$pwd = $_POST["password"];
		$schoolName = $_POST["name"];
		$mobile = $_POST["mobile"];
		$telphone = $_POST["telphone"];
		$userName = $_POST["userName"];
		
		$sql = "select email,pwd,schoolName,mobile,telphone,userName from school";
		$schoolList = $conn->GetArray($sql);
		$result = false;
		
		for($i=0;$i<count($schoolList);$i++)
		{
			if($schoolList[$i]["email"] == $email && $schoolList[$i]["schoolName"] == $schoolName
				&& $schoolList[$i]["mobile"] == $mobile && $schoolList[$i]["telphone"] == $telphone && $schoolList[$i]["userName"] == $userName)
				{
					$result = true;
				}
		}
		
		if($result)
		{
			if($pwd != "")
			{
				$sql = "update school set pwd = '$pwd' where email='$email'";
				$conn->Execute($sql);
				echo "<script type='text/javascript' language='javascript'>alert('密码重置成功！');window.location.href='login.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript' language='javascript'>alert('密码不能为空！');window.location.href='forget.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript' language='javascript'>alert('用户信息填写有误！');window.location.href='forget.php';</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript' language='javascript'>alert('验证码有误！');window.location.href='forget.php';</script>";
	}
}

$smarty->display("user/forget.tpl");
?>