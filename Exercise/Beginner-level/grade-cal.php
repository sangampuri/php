<?php

function input($score)
{
    if ($score > 89 && $score <= 100) {
        echo "A";
  } elseif($score>100) {
    echo "The score must be between 0-100";
  }
  elseif ($score > 79) {
        echo "B";
    } elseif ($score>69){
        echo "C";
    } elseif ($score>59) {
        echo "D";
    } else{
        echo "F";
    }
       
}

input(89);