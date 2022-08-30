<?php

if($handle=fopen("/xampp/htdocs/exercise/accessHistory.txt","a"));

if($handle);

$date=new DateTime();
date_default_timezone_set('Asia/Tokyo');
$date->format("Y年m月d日 H時i分s秒");


fwrite($handle,$date->format("Y年m月d日 H時i分s秒")."\r\n");

fclose($handle);



?>
