<?php 

function check($num)
{
    if($num%2 == 0) {
        echo "$num is even";
    } else {
        echo "$num is odd";
    }
}

check(5);