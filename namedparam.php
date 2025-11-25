<?php
function find($needle,$haystack){
    return strpos($haystack,$needle);
}

echo find(
    needle:'awesome',
    haystack:'PHP is awesome'
);

// function find($needle, $haystack)
// {
//     return strpos($haystack, $needle);
// }    


// echo find (
//     needle : 'awesome',
//     haystack : 'PHP is awesome!'
// );