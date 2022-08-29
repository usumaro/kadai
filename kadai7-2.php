<?php

$x=0;

$handle=fopen("/xampp/htdocs/exercise/number.txt","r");

if($handle);


while(! feof($handle))
{

   
    $buffer=fgets($handle);

    $x+=trim($buffer);
    
};

print $x;

fclose($handle);


?>

