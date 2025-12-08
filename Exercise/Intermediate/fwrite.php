<?php 

$myfile = fopen('data.txt','w');

$text = "sangam";
fwrite($myfile,$text);
fclose($myfile);
echo "Name saved successfully!";