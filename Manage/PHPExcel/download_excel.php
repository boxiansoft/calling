<?php
require_once("Config.Inc.User.php");
require_once 'PHPExcel.php'; 
require_once 'PHPExcel/Writer/Excel2007.php'; 
require_once 'PHPExcel/Writer/Excel5.php'; 

set_time_limit(0);
//define("TL_ABS_PATH",dirname(__FILE__).DIRECTORY_SEPARATOR);
error_reporting(E_ALL);

$filePath = 'weituoshu.xls'; 


//$PHPExcel = new PHPExcel(); 
//$PHPReader = new PHPExcel_Reader_Excel2007(); 

$objReader = PHPExcel_IOFactory::createReader('Excel5'); 
$objPHPExcel = $objReader->load($filePath); 


$sql = "select id from download order by id desc limit 0,1";
$rst = $conn->Execute($sql);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("L8",$rst->fields["id"]);

$close = new Close($rst,$conn);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
header('Content-Disposition: attachment;filename="'.iconv('UTF-8','GB2312',  "委托书.xls").'"'); 
header('Cache-Control: max-age=0'); 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
$objWriter->save('php://output');
exit;
?>