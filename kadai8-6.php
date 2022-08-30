<?php

date_default_timezone_set('Asia/Tokyo');

$date=new DateTime();

$date->format("d");



if(($date->format("d"))%2==0){
     print"今日の日付は偶数です";
}else{
     print"今日の日付は奇数です";


};


?>
