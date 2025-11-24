<?php
//!array in php

// $array = [10,2,3,"sangam",True,"Pedri"];
// echo "$array[2]";
// echo "$array[3]";
// echo "$array[4]";

//!We can now add new variables using an index.
$array[5] = "Messi";
// echo " $array[5]"

//!To delete an item from an array, use the unset function on the member itself.
// unset($array[0]);// will remove the 1st item (1) from the list
// print_r($array);

//! The (count) function returns the number of members an array has.
// echo count($array);

//!The (reset) function gets the first member of the array. (It also resets the internal iteration pointer).

// $first_item = reset($array);
// echo $first_item;

//! The (end) function gets the last member of the array.
// $first_item = end($array);
// echo $first_item;

//!using count to get last item
// $array2 = [10,2,3,"sangam",False,"Pedri","Messi"];
// $last_item=$array2[count($array2)-1];
// echo $last_item;
//!To push a member to the end of an array, use the array_push function:
// $array3 = [1,2,3,4];
// array_push($array3,5);
// print_r($array3)

//!To pop a member from the end of an array, use the array_pop function:
$numbers = [1, 2, 3, 4];
array_pop($numbers); // now array is [1,2,3];

// print the new array
print_r($numbers);

//!To push a member to the beginning of an array, use the array_unshift function:
$numbers = [1, 2, 3];
array_unshift($numbers, 0); // now array is [0,1,2,3];

// print the new array
print_r($numbers);
