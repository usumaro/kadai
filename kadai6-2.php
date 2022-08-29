<?php

$fruits=array("apple"=>"リンゴ","orange"=>"ミカン");

$json = json_encode($fruits,JSON_UNESCAPED_UNICODE);

print ($json)."<br/>";

$fruits=json_decode($json,true);

var_dump($fruits);

print"<br/>";

print_r ($fruits);

?>

