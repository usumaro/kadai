<?php
$z=0;

$numbers=array(10,5,9,7,2);

for($x=0;$x<count($numbers);$x++)
{
     $z=$numbers[$x]+=$z;

}
print $z;

?>

