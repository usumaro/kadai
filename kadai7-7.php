<?php

$x=0;

$handle=fopen("/xampp/htdocs/exercise/number.txt","r");

if($handle);

while(! feof($handle))

{

    $buffer=fgets($handle);

    $x+=trim($buffer);

}

fclose($handle);




$handle2=fopen("/xampp/htdocs/exercise/total.txt","w");

if($handle2);

fwrite($handle2,$x);

fclose($handle2);

?>

