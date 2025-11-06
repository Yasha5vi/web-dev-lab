<?php
$file = fopen("in.txt","r") or die("Unable to open file");
$content = fread($file,filesize("in.txt"));
echo $content;
fclose($file);
?>


