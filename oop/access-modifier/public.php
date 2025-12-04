<?php 

//!Public access modifier
//?can access:
//*with in a class itself ✅
//*Outside class ✅
//*Derived  class ✅

class base {

    public $name;

    public function __construct($n) 
    {
        $this->name =  $n;
    }

    public function show() {
        return $this->name ; 
    }
}

$first_name = new base("sangam");
echo $first_name ->show();


class second extends base {

}
$second_person = new second("Krishna");
echo $second_person ->show();

