<?php
$content = "Hello there";
$file = fopen("out.txt","w") or die("Unable to open file");
fwrite($file,$content);
fclose($file);

echo "content written";
?>