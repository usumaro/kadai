<?php


$handle=fopen("/xampp/htdocs/exercise/nameWrite.txt","w");

if($handle);

fwrite($handle,"usumaro");

fclose($handle);

?>

