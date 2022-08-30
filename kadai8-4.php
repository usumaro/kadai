<?php

date_default_timezone_set('Asia/Tokyo');

$date=new DateTime();

$date->modify("+1 months");


$date->format("Y年m月d日");


$handle=fopen("/xampp/htdocs/exercise/nextMonth.txt","w");

if($handle);

fwrite($handle,$date->format("Y年m月d日"));

fclose($handle);

?>
