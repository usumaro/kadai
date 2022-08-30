<?php


$handle=fopen("/xampp/htdocs/exercise/nameAge.txt","w");

if($handle);

fwrite($handle,"usumaro\n"."28歳");

fclose($handle);

?>

