<?php 

//!Checking if a file exists in the current dorectory using file_exists()
$filename = 'readme.txt';

if (file_exists($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename doesnot exist";
}

echo $message;

?>

//!Checking if a file exists using is_file()

<?php

$filename = 'readme.txt';

if (is_file($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;

?>


//!Checking if a file exists and is redable is_readable()
<?php

$filename = 'readme.txt';

if (is_readable($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;

?>


//!Checking if a file exists and is writable is_writable() 
<?php

$filename = 'readme.txt';

if (is_writable($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}

echo $message;

?>