<?php 

// $fruits = ['apple','orange','banana','pomegrate','watermelon'];

// echo $fruits[2];

// array_push($fruits,'mango');

// print_r($fruits);

// echo count($fruits);

$stu_details = [
    "name" => "sangam",
    "age" => 20,
    "grade" => "10th",
    "address" => "nemuwa"
];

foreach ($stu_details as $key => $value) {
    echo "$value"."<br>";
}