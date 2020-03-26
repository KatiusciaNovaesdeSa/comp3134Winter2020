<?php
$file = fopen("storedxss.txt", "r");
echo fread($file,filesize("storedxss.txt"));
fclose($file);
?>