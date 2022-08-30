<?php

date_default_timezone_set('Asia/Tokyo');


$today=new DateTime();
$date=new DateTime("2022-01-01");

$diff=$date->diff($today);

print $diff->days;

?>
