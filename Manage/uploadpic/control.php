<?php
header("Content-Type: text/html; charset=utf-8");
/**
 * Filename: upload.php
 * @abstract 文件上传处理类
 *          
 * @copyright (c) 2012 www.yulonghu.com
 * @author 范家鹏 fanjiapeng@126.com
 * @version   3.0  -    2012.08.26
 */
/* 返回值
Array
(
    [name] => 1079-1.png
    [type] => image/png
    [tmp_name] => E:\wamp\tmp\phpEB77.tmp
    [error] => 0
    [size] => 13881
    [img_type_number] => 3
    [height] => 260
    [width] => 370
    [new_name] => 188d7e9dcaeceb88334af4d7e0eb724c.png
    [new_dir] => 201208\
    [full_path] => E:\wamp\www\others\upload\upload\201208\188d7e9dcaeceb88334af4d7e0eb724c.png
)
 */
define('ROOT_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);

//path路径最后一个斜杠可以不加
$_config = array('path' => ROOT_DIR . '../../upload',
				'checkType' => TRUE,
				'fileType' => 'image',
				'cutHeight' => 150,
				'cutWidth' => 360,
				'cutting' => FALSE,
				'autoDir' => FALSE
);

//默认只允许上传gif、jpeg、png、bmp
require ROOT_DIR . './upload.php';
$handle = new upload($_config);

//上传图片功能开启
$info = $handle->put($_FILES['filename']);
//var_dump($return);
//echo $return["new_name"];
$bigPic = $info["new_name"];
$detailPic = $info["small_name"];


//等比例缩放图功能开启
$return1 = $handle->putThumb(); //true成功，false失败
//var_dump($return1);

if($bigPic) 	
{
	$message=$message."<script type='text/javascript' language='javascript'>"; 		
	$message=$message."alert(\"上传成功\");"; 		//
	$message=$message."opener.add.pic.value = '$bigPic';"; 
	$message=$message."window.close();";
	$message=$message."window.location.go(-1);";
	$message=$message."</script>";
	echo $message;
}
?>
