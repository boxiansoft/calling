<?php
require_once("Admin.Config.Inc.php");

if($_GET['action']=="editerstu")
{
	$id = 0;
	
	if(isset($_GET["id"]) && intval($_GET["id"],10)>0)
	{
		$id = intval($_GET["id"],10);
	}
	
	$stu_name = $_POST['stu_name'];
	$stu_sex = $_POST['stu_sex'];
	$stu_birthday = $_POST['stu_birthday'];
	$parent_type = $_POST['parent_type'];
	$parent_name = $_POST['parent_name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$postal = $_POST['postal'];
	$office_code = $_POST['office_code'];
	$office_tel = $_POST['office_tel'];
	$office_ext = $_POST['office_ext'];
	$home_code = $_POST['home_code'];
	$home_tel = $_POST['home_tel'];
	$home_ext = $_POST['home_ext'];
	
	$courseOne = "";
	$courseTwo = "";
	$courseThree = "";
	$courseFour = "";
	$courseFive = "";
	$courseSix = "";
	$courseSeven = "";
	$courseEight = "";
	$courseNine = "";
	
	$sql = "select id,train_type from course where parent_id=0";
	$bigList = $conn->GetArray($sql);
	
	$sql = "select id,train_type,parent_id from course where parent_id<>0";
	$smallList = $conn->GetArray($sql);
	
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
	
	$sql = "select * from student where id=$id";
	
	$rst = $conn->Execute($sql);
	$record = array();
	$record["stu_name"] = $stu_name;
	$record["stu_sex"] = $stu_sex;
	$record["stu_birthday"] = $stu_birthday;
	$record["parent_type"] = $parent_type;
	$record["parent_name"] = $parent_name;
	$record["mobile"] = $mobile;
	$record["email"] = $email;
	$record["province"] = "上海";
	$record["city"] = $city;
	$record["address"] = $address;
	$record["postal"] = $postal;
	$record["office_code"] = $office_code;
	$record["office_tel"] = $office_tel;
	$record["office_ext"] = $office_ext;
	$record["home_code"] = $home_code;
	$record["home_tel"] = $home_tel;
	$record["home_ext"] = $home_ext;
	
	$record["courseOne"] = $courseOne;
	$record["courseTwo"] = $courseTwo;
	$record["courseThree"] = $courseThree;
	$record["courseFour"] = $courseFour;
	$record["courseFive"] = $courseFive;
	$record["courseSix"] = $courseSix;
	$record["courseSeven"] = $courseSeven;
	$record["courseEight"] = $courseEight;
	$record["courseNine"] = $courseNine;
		
	
	if($id > 0)
	{
		$update = $conn->getUpdateSQL($rst,$record,true,true);
	}
	else
	{	
		$record["add_time"] = date('Y-m-d H:i:s',time());
		$update = $conn->getInsertSQL($rst,$record,true,true);
	}
	
	if($conn->Execute($update))
	{
		$close = new Close($rst,$conn);
		echo "<script type='text/javascript' language='javascript'>alert('保存成功');window.location.href='managestu.php';</script>";
	}
}

if($_GET['action']=="deleteStu")
{
	$id=$_GET['id'];
	$sql="delete from student where id=$id";
	$rst = $conn->Execute($sql)or die("delete error");
	
	if($rst > 0)
	{
		$close = new Close($rst,$conn);
		echo "<script type='text/javascript' language='javascript'>alert('OK');window.location.href='managestu.php';</script>";
	}
}

?>