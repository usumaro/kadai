<?php

date_default_timezone_set('Asia/Tokyo');

$date=new DateTime();

$date->modify("+7 days");


print $date->format("Y/m/d");

?>