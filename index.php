<?php
$myfile = fopen("git.txt", "r") or die("Fayl topilmadi!");
echo fread($myfile,filesize("git.txt"));
fclose($myfile);
?>