<?php

$handle=fopen("c:/xampp/htdocs/exercise/usumaro.txt","r");

if($handle);

while(! feof($handle))
{

    $buffer=fgets($handle);

   

}

print $buffer;

fclose($handle);
;


?>

