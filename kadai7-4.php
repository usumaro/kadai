<?php


$handle=fopen("/xampp/htdocs/exercise/characterData.txt","r");

if($handle);

$a=file("/xampp/htdocs/exercise/characterData.txt");

$result=array();

foreach($a as $row){

$array1=  explode(":",$row);

$result[$array1[0]]=$array1[1];
}





$json=json_encode($result,JSON_UNESCAPED_UNICODE);

var_dump($json);

fclose($handle);

?>

