<?php 
    // $multiArray = [
    //     [1,2,3],
    //     [4,5,6],
    //     [7,8,9]
    // ];

     // print_r($multiArray[0]);

    // print_r($multiArray[0][0]);//1
    // print_r($multiArray[0][1]); // 2
    // print_r($multiArray[0][2]); // 3

$people = [
    "john_doe" => [
        "name" => "John",
        "surname" => "Doe",
        "age" => 25,
    ],
    "jane_doe" => [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 25,
    ]
];

// print_r($people)
print_r($people["john_doe"]["name"])
?>