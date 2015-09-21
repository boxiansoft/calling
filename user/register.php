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

session_register('userName');

require_once("../Config.Inc.php");

$sql = "select id,area_name from area where parent_id<>0";
$areaList = $conn->GetArray($sql);
$smarty->assign("areaList",$areaList);

$sql = "select id,train_type from course where parent_id=0";
$bigList = $conn->GetArray($sql);
$smarty->assign("bigList",$bigList);

$sql = "select id,train_type,parent_id from course where parent_id<>0";
$smallList = $conn->GetArray($sql);
$smarty->assign("smallList",$smallList);

$picCode = strtolower($_POST['picCode']);
$SafeCode = strtolower($_SESSION['SafeCode']);

if($_GET['action']=="add")
{
if($picCode == $SafeCode)
{
		$sql = "select email from school";
		$emailList = $conn->GetArray($sql);	
		$email = $_POST['email'];
		
		if($email=="" || $email==null)
		{
			echo "<script type='text/javascript' language='javascript'>alert('邮箱申请不能为空！');window.location.href='register.php';</script>";
		}
		
		$flag = true;
		
		for($i = 0; $i<count($emailList);$i++)
		{
			if($email == $emailList[$i]["email"])
			{
				$flag = false;
			}
		}
		
		if($flag)
		{
			$name = $_POST['name'];
			$mobile = $_POST['mobile'];
			$telphone = $_POST['telphone'];
			$userName = $_POST['userName'];
			
			if($name=="" || $name==null)
			{
				echo "<script type='text/javascript' language='javascript'>alert('机构名称不能为空！');window.location.href='register.php';</script>";
			}
			else if($mobile=="" || $mobile==null)
			{
				echo "<script type='text/javascript' language='javascript'>alert('手机号码不能为空！');window.location.href='register.php';</script>";
			}
			else if($telphone=="" || $telphone==null)
			{
				echo "<script type='text/javascript' language='javascript'>alert('学校电话不能为空！');window.location.href='register.php';</script>";
			}
			else if($userName=="" || $userName==null)
			{
				echo "<script type='text/javascript' language='javascript'>alert('联系人不能为空！');window.location.href='register.php';</script>";
			}
			
			$area = "";
			$courseOne = "";
			$courseTwo = "";
			$courseThree = "";
			$courseFour = "";
			$courseFive = "";
			$courseSix = "";
			$courseSeven = "";
			$courseEight = "";
			$courseNine = "";
			
			for($i=0;$i<count($areaList);$i++)
			{
				$id=$areaList[$i]["id"];
				$area_temp = $_POST['area_'.$id];
				
				if($area_temp != null &&　area_temp != "")
				{
					$area=$area.$area_temp.",";
				}
			}
			
			$area = substr($area,0,strlen($area)-1);
			
			for($i=0;$i<count($bigList);$i++)
			{
				$course = "";
				
				for($j=0;$j<count($smallList);$j++)
				{
					if($bigList[$i]['id'] == $smallList[$j]['parent_id'])
					{					
						$courseName = "course_".$bigList[$i]['id']."_".$smallList[$j]['id'];
						$courseName = $_POST[$courseName];
						
						if($courseName != null && $courseName != "")
						{
							$course = $course.$courseName.",";
						}
					}
				}
				
				$course = substr($course,0,strlen($course)-1);
				
				switch($i)
				{
					case 0:
						$courseOne = $course;
						break;
					case 1:
						$courseTwo = $course;
						break;
					case 2:
						$courseThree = $course;
						break;
					case 3:
						$courseFour = $course;
						break;
					case 4:
						$courseFive = $course;
						break;
					case 5:
						$courseSix = $course;
						break;
					case 6:
						$courseSeven = $course;
						break;
					case 7:
						$courseEight = $course;
						break;
					case 8:
						$courseNine = $course;
						break;
				}
			}
			
			$sql = "select * from school where id=0";
			$rst = $conn->Execute($sql);
			$record = array();
			$record["email"] = $email;
			$record["schoolName"] = $name;
			$record["mobile"] = $mobile;
			$record["telphone"] = $telphone;
			$record["userName"] = $userName;
			$record["area"] = $area;
			$record["courseOne"] = $courseOne;
			$record["courseTwo"] = $courseTwo;
			$record["courseThree"] = $courseThree;
			$record["courseFour"] = $courseFour;
			$record["courseFive"] = $courseFive;
			$record["courseSix"] = $courseSix;
			$record["courseSeven"] = $courseSeven;
			$record["courseEight"] = $courseEight;
			$record["courseNine"] = $courseNine;
			$record["addTime"] = date('Y-m-d H:i:s',time());		
			$update = $conn->GetInsertSQL($rst,$record,true,true);
			
			if($conn->Execute($update))
			{
				//$_SESSION['userName'] = "fsfa@fws.com";
				$close = new Close($rst,$conn);
				echo "<script type='text/javascript' language='javascript'>alert('我们的工作人员会在2个工作日之内和您联系！您可以使用邮箱登入');window.location.href='login.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript' language='javascript'>alert('邮箱已存在！');window.location.href='register.php';</script>";
		}
	}
	else
	{
		echo "<script type='text/javascript' language='javascript'>alert('验证码填写有误！');window.location.href='register.php';</script>";
	}
}

$smarty->display("user/register.tpl");
?>