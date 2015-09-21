<?php
function safe_string($str){ //���˰�ȫ�ַ�
 $str=str_replace("'","",$str);
 $str=str_replace('"',"",$str);
 $str=str_replace(" ","$nbsp;",$str);
 $str=str_replace("\n;","<br/>",$str);
 $str=str_replace("<","<",$str);
 $str=str_replace(">",">",$str);
 $str=str_replace("\t"," ",$str);
 $str=str_replace("\r","",$str);
 $str=str_replace("/[\s\v]+/"," ",$str);
 return $str;
} 
?>