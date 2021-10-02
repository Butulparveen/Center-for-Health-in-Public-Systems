<?php
$myfile = fopen("contacts.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("contacts.txt"));
fclose($myfile);
?>