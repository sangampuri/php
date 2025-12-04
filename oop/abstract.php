<?php 

abstract class ParentClass
{
    public $name;

    abstract protected function Calc($a, $b);
} 

class ChildClass extends ParentClass
{
    public function Calc($a, $b)
    {
        echo $a+$b;
    }
}

$test = new ChildClass;

$test->Calc(7,3);