<?php

// function concat($str1, $str2)
// {
//     return $str1 . " " . $str2;
// }

// $greeting = concat(
//     "Welcome",
//     "Adim",
// );
// echo $greeting;


//!Passing arguments by values => The value of argument is not changedf
// $counter = 1;

// function increase($value){
//     $value+=1;
//     echo $value.'<br>';
// }

// increase($counter);
// echo $counter .'<br>';//1


//!Passing arguments by reference 
//?. If you want a function to change its arguments, you must pass them by reference.

$counter = 1 ;
// function increse(&$value){
//     $value+=1;
//     echo $value;
// }
// increse($counter);
// echo $counter; //2

