<?php 

// $name = "Sangam";
// echo $name;

// $introduction ="Hello $name";
// echo $introduction;


//!We can also concatenate strings using the dot . operator

// $f_name ="Sangam";
// $l_name="Puri";

// $full_name = $f_name." ".$l_name;
// echo $full_name;

//!To measure the length of a string, we use the (strlen) function

// echo strlen($full_name);


//!To cut a part of a string and return it as a new string, we can use the (substr) function:
// $filename = "image.png";
// $extension = substr($filename, strlen($filename) - 3);
// echo "The extension of the file is $extension";


//!Turns string to array
$fruits = "apple,banana,orange";
$fruit_list = explode(",", $fruits);
echo "The second fruit in the list is $fruit_list[1]";
print_r($fruit_list);


//!IT turns array to string
// $fruit_list = ["apple","banana","orange"];
// $fruits = implode(",", $fruit_list);
// echo "The fruits are $fruits";
?>