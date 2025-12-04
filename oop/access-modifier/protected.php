<?php 

//!Protected access modifier

//?can access:
//*with in a class itself ✅
//*Outside class ❌
//*Derived  class ✅



class base {

    protected $name;

    public function __construct($n) 
    {
        $this->name =  $n;
    }

    protected function show() {
        return $this->name ; 
    }

}

$first_name = new base("sangam");

//! $first_name->name = "<p>Elon</p>"; 
//We cannot do this in protected class ⬆️
// echo $first_name ->show();


class derived extends base {
    public function get () {
        echo $this -> name ;
    }
}
$second_person = new derived("Krishna");
echo $second_person ->get();

