<?php 

//!To read the contents from a file, you follow these steps:

//?Open the file for reading using the fopen() function.
//?Read the contents from the file using the fread() function.
//?Close the file using the fclose() function

$filename = './public/population.txt';

$f = fopen($filename,'r');

if ($f) {
    $contents = fread($f , filesize($filename));
    fclose($f);
    echo nl2br(($contents)) ;
}