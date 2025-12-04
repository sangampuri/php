<?php 

//!Private access modifier

//?can access:
//*with in a class itself ✅
//*Outside class ❌
//*Derived  class ❌


class Customer
{
	private $name;

	public function __construct($name)
    {
        $this->name = $name;
    }
	

	public function getName()
	{
		return $this->name;
	}
}

$obj1 = new Customer("First name");
echo $obj1->getName();

class derived extends Customer {
    // public function getName()
	// {
	// 	return $this->name; //! cannot access name here
	// }
}

$obj2 = new derived("Last name");
$obj2->name = "Middle name"; //?We can chnage name in derived class but not in base class
echo $obj2->getName();