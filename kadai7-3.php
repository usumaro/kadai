<?php

$x=0;
$y=0;



$handle=fopen("/xampp/htdocs/exercise/number.txt","r");

if($handle);

$counter = 0;

while(! feof($handle))
{

   
    $buffer=fgets($handle);

    $x+=trim($buffer);

    $counter++;
    
};

$y=$x/$counter;

fclose($handle);

print $y;

?>

