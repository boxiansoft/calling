<?php
require_once("Admin.Config.Inc.php");
require_once("authority.php");

if($_GET["action"] == "export")
{
	require_once 'PHPExcel/PHPExcel.php'; 
	require_once 'PHPExcel/PHPExcel/Writer/Excel2007.php'; 
	require_once 'PHPExcel/PHPExcel/Writer/Excel5.php'; 
	
	set_time_limit(0);
	error_reporting(E_ALL);
	$filePath = 'PHPExcel/student_info.xls'; 
	
	$objReader = PHPExcel_IOFactory::createReader('Excel5'); 
	$objPHPExcel = $objReader->load($filePath); 
	$objReader->setOutputEncoding('utf8');
	$sql = "select * from student where 1=1 ";
	$startDate = $_POST["startDate"];
	$endDate = $_POST["endDate"];
	
	if($startDate != null && $startDate != "")
	{
		$sql = $sql." and date_format(add_time,'%Y-%m-%d') >='$startDate'";
	}
	
	if($endDate != null && $endDate != "")
	{
		$sql = $sql." and date_format(add_time,'%Y-%m-%d') <='$endDate'";
	}
	
	$sql = $sql." order by id desc";
	$rst = $conn->Execute($sql);
	$stuList= $rst->GetArray();

	for($i=0;$i<count($stuList);$i++)
	{
		$row = $i+2;
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue("A".$row,$stuList[$i]['stu_name'])
					->setCellValue("B".$row,$stuList[$i]['stu_sex'])
					->setCellValue("C".$row,$stuList[$i]['stu_birthday'])
					->setCellValue("D".$row,$stuList[$i]['parent_type'])
					->setCellValue("E".$row,$stuList[$i]['parent_name'])
					->setCellValue("F".$row,$stuList[$i]['courseOne'])
					->setCellValue("G".$row,$stuList[$i]['courseTwo'])
					->setCellValue("H".$row,$stuList[$i]['courseThree'])
					->setCellValue("I".$row,$stuList[$i]['courseFour'])
					->setCellValue("J".$row,$stuList[$i]['courseFive'])
					->setCellValue("K".$row,$stuList[$i]['courseSix'])
					->setCellValue("L".$row,$stuList[$i]['courseSeven'])
					->setCellValue("M".$row,$stuList[$i]['courseEight'])
					->setCellValue("N".$row,$stuList[$i]['courseNine'])
					->setCellValue("O".$row,$stuList[$i]['province'])
					->setCellValue("P".$row,$stuList[$i]['city'])
					->setCellValue("Q".$row,$stuList[$i]['address'])
					->setCellValue("R".$row,$stuList[$i]['postal'])
					->setCellValue("S".$row,$stuList[$i]['office_code'])
					->setCellValue("T".$row,$stuList[$i]['office_tel'])
					->setCellValue("U".$row,$stuList[$i]['office_ext'])
					->setCellValue("V".$row,$stuList[$i]['home_code'])
					->setCellValue("W".$row,$stuList[$i]['home_tel'])
					->setCellValue("X".$row,$stuList[$i]['home_ext'])
					->setCellValue("Y".$row,$stuList[$i]['mobile'])
					->setCellValue("Z".$row,$stuList[$i]['email']);
	}
	
	$close = new Close($rst,$conn);
	
	header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
	header('Content-Disposition: attachment;filename="'.iconv('UTF-8','GB2312',  "学生信息表.xls").'"'); 
	header('Cache-Control: max-age=0'); 
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
	$objWriter->save('php://output');
	exit;
}
$smarty->display("Admin/user/stuexport.tpl");
/*
					->setCellValue("A".$row,iconv('UTF-8','GB2312', $stuList[$i]['stu_name']))
					->setCellValue("B".$row,iconv('UTF-8','GB2312',$stuList[$i]['stu_sex']))
					->setCellValue("C".$row,iconv('UTF-8','GB2312',$stuList[$i]['stu_birthday']))
					->setCellValue("D".$row,iconv('UTF-8','GB2312',$stuList[$i]['parent_type']))
					->setCellValue("E".$row,iconv('UTF-8','GB2312',$stuList[$i]['parent_name']))
					->setCellValue("F".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseOne']))
					->setCellValue("G".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseTwo']))
					->setCellValue("H".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseThree']))
					->setCellValue("I".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseFour']))
					->setCellValue("J".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseFive']))
					->setCellValue("K".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseSix']))
					->setCellValue("L".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseSeven']))
					->setCellValue("M".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseEight']))
					->setCellValue("N".$row,iconv('UTF-8','GB2312',$stuList[$i]['courseNine']))
					->setCellValue("O".$row,iconv('UTF-8','GB2312',$stuList[$i]['province']))
					->setCellValue("P".$row,iconv('UTF-8','GB2312',$stuList[$i]['city']))
					->setCellValue("Q".$row,iconv('UTF-8','GB2312',$stuList[$i]['address']))
					->setCellValue("R".$row,iconv('UTF-8','GB2312',$stuList[$i]['postal']))
					->setCellValue("S".$row,iconv('UTF-8','GB2312',$stuList[$i]['office_code']))
					->setCellValue("T".$row,iconv('UTF-8','GB2312',$stuList[$i]['office_tel']))
					->setCellValue("U".$row,iconv('UTF-8','GB2312',$stuList[$i]['office_ext']))
					->setCellValue("V".$row,iconv('UTF-8','GB2312',$stuList[$i]['home_code']))
					->setCellValue("W".$row,iconv('UTF-8','GB2312',$stuList[$i]['home_tel']))
					->setCellValue("X".$row,iconv('UTF-8','GB2312',$stuList[$i]['home_ext']))
					->setCellValue("Y".$row,iconv('UTF-8','GB2312',$stuList[$i]['mobile']))
					->setCellValue("Z".$row,iconv('UTF-8','GB2312',$stuList[$i]['email']));
					*/
?>
