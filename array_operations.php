<?php
// $lengths = [10,20,30];
// $areas=[];

// foreach($lengths as $length){
//     $areas[] = $length * $length;
// }

// print_r($areas);


//!using aray_map() and arrow function
// $lengths = [10, 20, 30];

//calculate area
// $areas = array_map(
//     fn($length) => $length * $length,
//     $lengths
// );
// print_r($areas);

//!using array_map and anynomous function
// $lengths = [10, 20, 30];

// $areas = array_map(function ($length){
//     return $length*$length;
// },$lengths);

// print_r($areas);


//!array_filter
$numbers = [1, 2, 3, 4, 5];

$odd_numbers = array_filter(
	$numbers,
	function ($number) {
		return $number % 2 === 1;
	}
);

print_r($odd_numbers);

//!array_reduce()

$numbers = [10,20,30];

$total  = array_reduce($numbers, function ($previous, $current) {
    return $previous + $current;
});

echo $total; // 60