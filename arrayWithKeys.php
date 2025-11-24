<?php
// $phone_num = [
//     "Sangam" => "980700****",
//     "Krishna" => "9785794***"
// ];

// print_r($phone_num);


// echo "Sangam's phone number is" . " " . $phone_num["Sangam"];
// echo "Krishna's phone number is" . $phone_num["Krishna"]


//!To add an item to an array using a key, we use the brackets operator, as you would expect.

// $phone_numbers = [
//   "Alex" => "415-235-8573",
//   "Jessica" => "415-492-4856",
// ];

// $phone_numbers["Michal"]="7844558844";
// print_r($phone_numbers);


//!To check if a key exists within an array, we can use the (array_key_exists) function:

// $phone_numbers = [
//     "Alex" => "415-235-8573",
//     "Jessica" => "415-492-4856",
// ];

// if (array_key_exists("Alex", $phone_numbers)) {
//     echo "Alex's phone number is " . $phone_numbers["Alex"];
// } else {
//     echo "Alex's phone number is not in the phone book!";
// }

// if (array_key_exists("Michael", $phone_numbers)) {
//     echo "Michael's phone number is " . $phone_numbers["Michael"] . "\n";
// } else {
//     echo "Michael's phone number is not in the phone book!";
// }

//!If we want to extract only the keys of the array "the names", we can use the (array_keys) function.

// $phone_numbers = [
//   "Alex" => "415-235-8573",
//   "Jessica" => "415-492-4856",
// ];

// print_r(array_keys($phone_numbers));

//!Alternatively, to get only the values of an array (the phone numbers), we can use the array_values function.

$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

print_r(array_values($phone_numbers));
?>