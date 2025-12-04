<?php 

interface Parent1 {
    function calc($a,$b);
}

interface Parent2{
    function sub($c,$d);
}

class ChildClass implements Parent1, Parent2 {

    public function calc($a,$b) {
        echo $a+$b."<br>";
    }
    public function sub($c, $d)
    {
        echo $c-$d;
    }
}

$test= new ChildClass();
$test->Calc(1,1);
$test->sub(1,1);