<?php

$filename = 'readme.txt';

if (!is_readable($filename)) {
    die('File does not exist or is not readable');
}

echo file_get_contents($filename);