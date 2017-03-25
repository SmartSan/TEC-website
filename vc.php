<?php
$file=fopen("counter.txt","r");
$visitorcount=(int) fread($file,100000);
$visitorcount++;
fclose($file);
//echo"you are visitor number:$visitorcount";
$file=fopen("counter.txt","w");
fwrite($file,$visitorcount);
fclose($file);
?>
