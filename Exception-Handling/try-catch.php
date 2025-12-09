<?php 
//!Syntax of try catch statement

try {
    //perform some task
} catch (Exception $e) {
    //jump to this part
    //if an exception occured
}


//TODO Example 1
// $data = [];
// $f = fopen('data.csv','r');

// if(!$f) {
//     echo 'The file is not accessiable';
//     exit;
// }

// do {
//     $row = fgetcsv($f);
//     if($row === null) {
//         echo 'The stram is invalid.';
//     }

//     if($row === false) {
//         echo 'Other erroes occured';
//     }

//     $data[]=$row;
// } while ($row);

// if (!$f) {
// 	fclose($f);
// }

//TODO Example 1 with try catch

$data=[];

try {
    $f = fopen('data.csv','r');

    do {
        $row = fgetcsv($f);
        $data[]=$row;
        
    } while ($row);
     echo '<pre>';
        print_r($data);
        echo '<pre>';
    fclose($f);


} catch (Exception $e) {
    echo $e->getMessage();
}

?>


