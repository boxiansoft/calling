<?php
require_once('../FCKeditor/fckeditor.php');
//定义一个函数用于调用FCK 

function createEditer($inputName, $inputValue = '',$width='550',$height='400',$toolbarSet='Basic'){
$editor = new FCKeditor($inputName) ;
$editor->BasePath = "../FCKeditor/";
$editor->ToolbarSet = $toolbarSet;
$editor->Width = $width;
$editor->Height = $height;
$editor->Value = $inputValue;
$GLOBALS['smarty']->assign("editor", $editor->CreateHtml());
}
?>